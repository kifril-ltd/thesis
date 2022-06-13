<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\BoilerRoom\BoilerRoom;
use App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure;
use App\Repositories\Interfaces\BoilerRoomExpendituresRepositoryInterface;
use App\Repositories\Interfaces\BoilerRoomPassportRepositoryInterface;
use Barryvdh\DomPDF\Facade\Pdf;
use Doctrine\DBAL\Driver\IBMDB2\Exception\StatementError;
use iio\libmergepdf\Merger;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    private $passportRepository;
    private $expendituresRepository;

    public function __construct(BoilerRoomPassportRepositoryInterface $passportRepository, BoilerRoomExpendituresRepositoryInterface $expendituresRepository)
    {
        $this->passportRepository = $passportRepository;
        $this->expendituresRepository = $expendituresRepository;
    }

    public function makeReport(Request $request)
    {
        $data = json_decode($request->getContent(), true)['data'];
        //dd($data);
        switch ($data['reportType']) {
            case 'passport':
                $report = $this->generateBoilerRoomPassport($data);
                break;
            case 'expenditures':
                $report = $this->generateBoilerRoomExpenditures($data);
                break;
        }

        $filename = Carbon::now()->format('Ymdhms').'-Report.pdf';
        Storage::disk('public')->put($filename, $report);
        return Storage::url($filename);
    }

    public function getMunicipalityList() {
        $municipality = BoilerRoom::select('municipality')->distinct()->get()->toArray();
        return new JsonResponse([
            'result' => $municipality
        ]);
    }

    public function getBoilerRoomList(Request $request) {
        $boilerRooms = BoilerRoom::select(['boiler_room_id', 'address']);
        if($request->exists('municipality')){
            $municipality = $request->get('municipality');
            $boilerRooms->where('municipality', $municipality);
        }
        return new JsonResponse([
            'result' => $boilerRooms->get()->toArray()
        ]);
    }

    private function generateBoilerRoomPassport(mixed $data)
    {
        $merger = new Merger();

        $boilerRoom = $this->passportRepository->getTitlePageInformation($data['boilerRoomId']);
        $title = Pdf::loadView('title', $boilerRoom);

        $boilerRoomTech = $this->passportRepository->getTechSpecPageInformation($data['boilerRoomId']);
        $boilerRoomTech = Pdf::loadView('boiler_room_tech', $boilerRoomTech);

        $boilerRoom = BoilerRoom::where('boiler_room_id', $data['boilerRoomId'])->first()->toArray();
        $boilerRoomBalance = Pdf::loadView('boiler_room_heat_balance', $boilerRoom);

        $heatingNetworks = $this->passportRepository->getHeatingNetworkPageInformation($data['boilerRoomId']);
        $boilerRoomBoilers = Pdf::loadView('boiler_room_heating_network', ['heating_networks' => $heatingNetworks]);
        $boilerRoomBoilers->setPaper('a4', 'landscape');

        $title->render();
        $boilerRoomTech->render();
        $boilerRoomBalance->render();
        $boilerRoomBoilers->render();

        $merger->addRaw($title->output());
        $merger->addRaw($boilerRoomTech->output());
        $merger->addRaw($boilerRoomBalance->output());
        $merger->addRaw($boilerRoomBoilers->output());

        return $merger->merge();
    }

    private function generateBoilerRoomExpenditures(mixed $data)
    {
        $merger = new Merger();

        $title = Pdf::loadView('expenditure_title',
            [
                'startYear' => $data['startYear'],
                'endYear' => $data['endYear'],
                'municipality' => $data['municipality']]);

        $expenditures = $this->expendituresRepository->getExpendituresByMunicipality(
            $data['municipality'],
            $data['startYear'],
            $data['endYear'],
            $data['types']
        );

        $expList = Pdf::loadView('expenditures_list',
            [
                'expenditures' => $expenditures['expenditures'],
                'types' => $data['types']
            ]
        );
        $expList->setPaper('a4', 'landscape');


        $totalChartsOptions = $this->totalExpendituresChart($data);
        $totalChart = Pdf::loadView('expenditures_total_chart',
            [
                'charts' => $totalChartsOptions,
            ]
        );
        $totalChart->setPaper('a4', 'landscape');

        $categoryCharts = $this->totalExpendituresByCategoryChart($data);
        $categoryChart = Pdf::loadView('expenditures_category_chart',
            [
                'charts' => $categoryCharts,
            ]
        );
        $categoryChart->setPaper('a4', 'landscape');


        $title->render();
        $expList->render();
        $totalChart->render();
        $categoryChart->render();

        $merger->addRaw($title->output());
        $merger->addRaw($expList->output());
        $merger->addRaw($totalChart->output());
        $merger->addRaw($categoryChart->output());


        return $merger->merge();
    }

    private function totalExpendituresChart($data)
    {
        if ($data['municipality']) {
            $boilerRooms = BoilerRoom::where('municipality', $data['municipality'])->get();
        } else {
            $boilerRooms = BoilerRoom::all();
        }

        $labels = [];
        $chartData = [];

        foreach ($boilerRooms as $boilerRoom) {
            $labels[] = $boilerRoom->title;
            $consumers = ($boilerRoom->connected_homes + $boilerRoom->connected_budgets + $boilerRoom->connected_others) ?: 1;
            $chartData[] = $this->expendituresRepository->getTotalExpendituresForBoilerRoom(
                    $boilerRoom->boiler_room_id,
                    $data['startYear'],
                    $data['endYear'],
                    $data['types']
                ) / $consumers;
        }

        $labelsChunk = array_chunk($labels, 10);
        $dataChunk = array_chunk($chartData, 10);

        $chartsOptions = [];

        $chunksCount = count($labelsChunk);

        for ($i = 0; $i < $chunksCount; $i++) {
            $options = [
                'type' => 'bar',
                'data' => [
                    'labels' => $labelsChunk[$i],
                    'datasets' => [
                        [
                            'data' => $dataChunk[$i]
                        ],
                    ]
                ],
                'options' => [
                    'legend' => [
                        'display' => false,
                    ],
                    'title' => [
                        'display' => true,
                        'text' => 'Затраты на одного потребителя ' . ($i + 1)
                    ],
                    'scales' => [
                        'xAxes' => [
                            [
                                'ticks' => [
                                    'fontSize' => 8
                                ]
                            ]
                        ]
                    ]
                ]
            ];
            $chartsOptions[] = urlencode(json_encode($options));
        }

        return $chartsOptions;
    }

    private function totalExpendituresByCategoryChart($data)
    {

        $expenditures = $this->expendituresRepository->getTotalExpendituresByCategory(
            $data['municipality'],
            $data['startYear'],
            $data['endYear'],
            $data['types']
        );

        $energy = [
            'Закупка газа',
            'Закупка электроэнергии',
            'Закупка холодной воды',
        ];
        $salary = [
            'Зарплата эксплуатационного персонала',
            'Зарплата ремонтного персонала',
            'Зарплата ИТР',
        ];
        $operation = [
            'Затраты на техобслуживание',
            'Затраты на ремонт',
            'Затраты на оборудование ХВО',
        ];
        $types = $data['types'];

        $resultTypes = [];
        $expenditureColumns = [];

        if ($types['energy']) {
            array_push($resultTypes, ...$energy);
            array_push($expenditureColumns, 'gas', 'electricity', 'cold_water');
        }

        if ($types['salary']) {
            array_push($resultTypes, ...$salary);
            array_push($expenditureColumns, 'operational_salary', 'repair_salary', 'engineering_salary');
        }

        if ($types['operational']) {
            array_push($resultTypes, ...$operation);
            array_push($expenditureColumns, 'maintenance', 'repair', 'equipment');
        }

        $chartsOptions = [];
        foreach ($expenditures as $expenditure) {
            $expData = [];
            foreach ($expenditureColumns as $column) {
                $expData[] = $expenditure->$column;
            }
            $options = [
                'type' => 'doughnut',
                'data' => [
                    'labels' => $resultTypes,
                    'datasets' => [
                        [
                            'data' => $expData
                        ],
                    ]
                ],
                'options' => [
                    'legend' => [
                        'display' => true,
                    ],
                    'title' => [
                        'display' => true,
                        'text' => $expenditure->boiler_room_title,
                    ],
                ]
            ];
            $chartsOptions[] = urlencode(json_encode($options));
        }
        return $chartsOptions;
    }
}
