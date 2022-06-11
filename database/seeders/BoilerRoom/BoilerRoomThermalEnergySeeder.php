<?php

namespace Database\Seeders\BoilerRoom;

use App\Models\BoilerRoom\BoilerRoomThermalEnergy\BoilerRoomThermalEnergy;
use App\Models\Meta\User\User;
use Illuminate\Database\Seeder;
use Str;

class BoilerRoomThermalEnergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_value_1 = User::where('login', '1')->first()->user_id;

        $user_value_2 = User::where('login', '2')->first()->user_id;

        $user_value_3 = User::where('login', '3')->first()->user_id;

        $user_value_4 = User::where('login', '4')->first()->user_id;

        $user_value_5 = User::where('login', '5')->first()->user_id;

        $user_value_6 = User::where('login', '6')->first()->user_id;

        $user_value_7 = User::where('login', '7')->first()->user_id;

        $user_value_8 = User::where('login', '8')->first()->user_id;

        $user_value_9 = User::where('login', '9')->first()->user_id;

        $user_value_10 = User::where('login', '10')->first()->user_id;

        $user_value_11 = User::where('login', '11')->first()->user_id;

        $user_value_12 = User::where('login', '12')->first()->user_id;

        $user_value_13 = User::where('login', '13')->first()->user_id;

        $user_value_14 = User::where('login', '14')->first()->user_id;

        $user_value_15 = User::where('login', '15')->first()->user_id;

        $user_value_16 = User::where('login', '16')->first()->user_id;

        $user_value_17 = User::where('login', '17')->first()->user_id;

        $user_value_18 = User::where('login', '18')->first()->user_id;

        $user_value_19 = User::where('login', '19')->first()->user_id;

        $user_value_20 = User::where('login', '20')->first()->user_id;

        $user_value_null = User::where('login', 'null')->first()->user_id;

        BoilerRoomThermalEnergy::insert([
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 2880,
                'owner_id' => $user_value_1,
                'created_by' => $user_value_1,
                'updated_by' => $user_value_1,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 9500,
                'owner_id' => $user_value_2,
                'created_by' => $user_value_2,
                'updated_by' => $user_value_2,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 19.8,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 27,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 23.6,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 662,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 44,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 1195,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],





            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 44,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 150,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 65,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 86,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 46,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 26,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 250,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 250,
                'owner_id' => $user_value_3,
                'created_by' => $user_value_3,
                'updated_by' => $user_value_3,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 887,
                'owner_id' => $user_value_4,
                'created_by' => $user_value_4,
                'updated_by' => $user_value_4,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 894,
                'owner_id' => $user_value_5,
                'created_by' => $user_value_5,
                'updated_by' => $user_value_5,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 424,
                'owner_id' => $user_value_6,
                'created_by' => $user_value_6,
                'updated_by' => $user_value_6,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 164,
                'owner_id' => $user_value_7,
                'created_by' => $user_value_7,
                'updated_by' => $user_value_7,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 648,
                'owner_id' => $user_value_8,
                'created_by' => $user_value_8,
                'updated_by' => $user_value_8,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 1550,
                'owner_id' => $user_value_4,
                'created_by' => $user_value_4,
                'updated_by' => $user_value_4,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 3550,
                'owner_id' => $user_value_9,
                'created_by' => $user_value_9,
                'updated_by' => $user_value_9,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 320,
                'owner_id' => $user_value_10,
                'created_by' => $user_value_10,
                'updated_by' => $user_value_10,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 822,
                'owner_id' => $user_value_11,
                'created_by' => $user_value_11,
                'updated_by' => $user_value_11,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 6224,
                'owner_id' => $user_value_4,
                'created_by' => $user_value_4,
                'updated_by' => $user_value_4,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 0,
                'owner_id' => $user_value_12,
                'created_by' => $user_value_12,
                'updated_by' => $user_value_12,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 274,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 52,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 224,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 95,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 211,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 400,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 115,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 58,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 61,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 550,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 450,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 230,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 345,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 236,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 294,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 330,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 66,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 76,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 400,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 357,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 100,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 1152,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 186,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 84,
                'owner_id' => $user_value_13,
                'created_by' => $user_value_13,
                'updated_by' => $user_value_13,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 500,
                'owner_id' => $user_value_14,
                'created_by' => $user_value_14,
                'updated_by' => $user_value_14,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 59,
                'owner_id' => $user_value_15,
                'created_by' => $user_value_15,
                'updated_by' => $user_value_15,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 70,
                'owner_id' => $user_value_16,
                'created_by' => $user_value_16,
                'updated_by' => $user_value_16,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 192,
                'owner_id' => $user_value_17,
                'created_by' => $user_value_17,
                'updated_by' => $user_value_17,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 296,
                'owner_id' => $user_value_18,
                'created_by' => $user_value_18,
                'updated_by' => $user_value_18,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 59,
                'owner_id' => $user_value_19,
                'created_by' => $user_value_19,
                'updated_by' => $user_value_19,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],

            [
                'boiler_room_thermal_energy_id' => Str::Uuid()->toString(),
                'volume_of_heat_energy_release' => 162,
                'owner_id' => $user_value_20,
                'created_by' => $user_value_20,
                'updated_by' => $user_value_20,
                'status_id' => $_ENV['STATUS_DEFAULT_OBJECT_ID'],
                'year' => '2022',
                'volume' => 0,
            ],
        ]);
    }
}
