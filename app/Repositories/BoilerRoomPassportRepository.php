<?php

namespace App\Repositories;

use App\Models\BoilerRoom\BoilerRoom;
use App\Repositories\Interfaces\BoilerRoomPassportRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BoilerRoomPassportRepository implements BoilerRoomPassportRepositoryInterface
{

    public function getTitlePageInformation($boilerRoomId)
    {
        return BoilerRoom::select([
            'title',
            'address',
            'name_of_the_owner',
            'operating_organization',
            'municipality'
        ])
            ->where('boiler_room_id', $boilerRoomId)
            ->first()
            ->toArray();
    }

    public function getTechSpecPageInformation($boilerRoomId)
    {
        $boilerRoom = DB::table('boiler_rooms', 'br')
            ->join(
                'boiler_room_boilers',
                'br.boiler_room_id',
                '=',
                'boiler_room_boilers.boiler_room_id'
            )
            ->select(
                'br.municipality',
                        'br.installed_capacity'
            )
            ->selectRaw('min(boiler_room_boilers.operation_year) as operation_year')
            ->selectRaw('sum(boiler_room_boilers.installed_capacity) as total_capacity')
            ->where('br.boiler_room_id', $boilerRoomId)
            ->groupBy('br.boiler_room_id')
            ->get()
            ->toArray();

        $boilers = DB::table('boiler_rooms', 'br')
            ->join(
                'boiler_room_boilers',
                'br.boiler_room_id',
                '=',
                'boiler_room_boilers.boiler_room_id'
            )
            ->select(
                'boiler_room_boilers.installed_capacity as boiler_installed_capacity',
                'boiler_room_boilers.operation_year as boiler_operation_year',
                'boiler_room_boilers.building_renovation_year as boiler_building_renovation_year',
                'boiler_room_boilers.type_of_main_fuel as type_of_main_fuel',
                'boiler_room_boilers.type_of_backup_fuel as type_of_backup_fuel',
            )
            ->selectRaw("date_part('year', now()) - boiler_room_boilers.operation_year as life_time")
            ->where('br.boiler_room_id', $boilerRoomId)
            ->orderBy('boiler_room_boilers.operation_year')
            ->get()
            ->toArray();

       return ['boilerRoom' => $boilerRoom, 'boilers' => $boilers];
    }

    public function getHeatingNetworkPageInformation($boilerRoomId)
    {
        return DB::table('boiler_rooms', 'br')
            ->join(
                'boiler_room_heating_networks',
                'br.boiler_room_id',
                '=',
                'boiler_room_heating_networks.boiler_room_id'
            )
            ->select(
                'boiler_room_heating_networks.*'
            )
            ->where('br.boiler_room_id', $boilerRoomId)
            ->orderBy('boiler_room_heating_networks.operation_year')
            ->get()
            ->toArray();
    }
}
