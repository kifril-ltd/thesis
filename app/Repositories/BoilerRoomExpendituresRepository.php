<?php

namespace App\Repositories;

use App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure;
use Illuminate\Support\Facades\DB;

class BoilerRoomExpendituresRepository implements Interfaces\BoilerRoomExpendituresRepositoryInterface
{

    public function getExpendituresByMunicipality($municipality, $startYear, $endYear, $types)
    {
        $query = DB::table('boiler_rooms', 'br')
            ->join(
                'boiler_room_expenditures',
                'br.boiler_room_id',
                '=',
                'boiler_room_expenditures.boiler_room_id'
            )
            ->whereRaw('(boiler_room_expenditures.year BETWEEN ? AND ?)', [$startYear, $endYear] )
            ->orderBy('br.title')
            ->orderBy('br.boiler_room_id');

        if ($municipality) {
            $query->where('br.municipality', $municipality);
        }

        $expenditures = clone $query;

        $expenditures->addSelect(
            'br.boiler_room_id',
            'br.title as boiler_room_title',
            'boiler_room_expenditures.year as expenditure_year'
        )
            ->orderBy('boiler_room_expenditures.year');

        if ($types['energy']) {
            $expenditures->addSelect(
                'boiler_room_expenditures.purchase_of_gas',
                'boiler_room_expenditures.purchase_of_electricity',
                'boiler_room_expenditures.purchase_of_cold_water',
            );
        }

        if ($types['salary']) {
            $expenditures->addSelect(
                'boiler_room_expenditures.operational_staff_salary',
                'boiler_room_expenditures.repair_staff_salary',
                'boiler_room_expenditures.engineering_staff_salary',
            );
        }

        if ($types['operational']) {
            $expenditures->addSelect(
                'boiler_room_expenditures.maintenance_cost',
                'boiler_room_expenditures.repair_cost',
                'boiler_room_expenditures.equipment_operating_cost',
            );
        }

        //dd($totals->toSql());

        return ['expenditures' => $expenditures->get()];
    }

    public function getTotalExpendituresForBoilerRoom($boilerRoom, $startYear, $endYear, $types)
    {
        $query = BoilerRoomExpenditure::whereBetween('year', [$startYear, $endYear])
            ->where('boiler_room_id', $boilerRoom);

        $sumColumns = [];

        if ($types['energy']) {
            $sumColumns[] = 'purchase_of_gas';
            $sumColumns[] = 'purchase_of_electricity';
            $sumColumns[] = 'purchase_of_cold_water';
        }

        if ($types['salary']) {
            $sumColumns[] = 'operational_staff_salary';
            $sumColumns[] = 'repair_staff_salary';
            $sumColumns[] = 'engineering_staff_salary';
        }

        if ($types['operational']) {
            $sumColumns[] = 'maintenance_cost';
            $sumColumns[] = 'repair_cost';
            $sumColumns[] = 'equipment_operating_cost';
        }

        return $query->sum(DB::raw(implode(' + ', $sumColumns)));
    }

    public function getTotalExpendituresByCategory($municipality, $startYear, $endYear, $types)
    {
        $query = DB::table('boiler_rooms', 'br')
            ->join(
                'boiler_room_expenditures',
                'br.boiler_room_id',
                '=',
                'boiler_room_expenditures.boiler_room_id'
            )
            ->whereRaw('(boiler_room_expenditures.year BETWEEN ? AND ?)', [$startYear, $endYear]);

        if ($municipality) {
            $query->where('br.municipality', $municipality);
        }

        $expenditures = clone $query;

        $expenditures->addSelect(
            'br.boiler_room_id',
                   'br.title as boiler_room_title',
        );

        if ($types['energy']) {
            $expenditures->selectRaw(
                'sum(boiler_room_expenditures.purchase_of_gas) as gas,
                           sum(boiler_room_expenditures.purchase_of_electricity) as electricity,
                           sum(boiler_room_expenditures.purchase_of_cold_water) as cold_water'
            );
        }

        if ($types['salary']) {
            $expenditures->selectRaw(
                'sum(boiler_room_expenditures.operational_staff_salary) as operational_salary,
                sum(boiler_room_expenditures.repair_staff_salary) as repair_salary,
                sum(boiler_room_expenditures.engineering_staff_salary) as engineering_salary',
            );
        }

        if ($types['operational']) {
            $expenditures->selectRaw(
                'sum(boiler_room_expenditures.maintenance_cost) as maintenance,
                sum(boiler_room_expenditures.repair_cost) as repair,
                sum(boiler_room_expenditures.equipment_operating_cost) as equipment',
            );
        }

        $expenditures->groupBy('br.boiler_room_id');

        return  $expenditures->get();
    }
}
