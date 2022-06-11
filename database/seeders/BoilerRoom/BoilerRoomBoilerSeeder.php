<?php

namespace Database\Seeders\BoilerRoom;

use App\Models\BoilerRoom\BoilerRoom;
use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\Meta\User\User;
use Illuminate\Database\Seeder;
use Str;

class BoilerRoomBoilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('login', 'admin')->first()->user_id;

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк, ул.Бородинская, строение 49')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.91,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.91,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.91,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.91,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Катукова, влад. 51')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2017,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 10.7,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Гагарина 70 а')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2016,
                    'building_renovation_year' => 2016,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 3.44,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. 8 Марта, строение 15б')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2008,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 2.795,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2008,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 2.795,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Тамбовская, д. 8')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2015,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.49,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2015,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.49,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк р-он ул. К. Цеткин')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2008,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.075,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2008,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.075,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. С.Казьмина, д.3а')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2016,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 3.18,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2016,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 3.18,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. С.Казьмина, д.3а/1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2020,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 4.84,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2020,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 4.84,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2020,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 4.84,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 1Д')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2005,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 2.502,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2005,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 2.502,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 3В')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2007,
                    'building_renovation_year' => 2019,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.515,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2007,
                    'building_renovation_year' => 2019,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.515,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 1П')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2003,
                    'building_renovation_year' => 2019,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.82,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2001,
                    'building_renovation_year' => 2019,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.82,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул Мира, 124В')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2016,
                    'building_renovation_year' => 2020,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.1,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2003,
                    'building_renovation_year' => 2020,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.064,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Л. Толстого, 4В')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2005,
                    'building_renovation_year' => 2020,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.215,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2005,
                    'building_renovation_year' => 2020,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.215,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Свердлова, 7В')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2006,
                    'building_renovation_year' => 2020,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.82,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2006,
                    'building_renovation_year' => 2020,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.82,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул 9 Декабря, 19В')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2001,
                    'building_renovation_year' => 2021,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2003,
                    'building_renovation_year' => 2021,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2003,
                    'building_renovation_year' => 2021,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2003,
                    'building_renovation_year' => 2021,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул Шоссейная, 1Б')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2016,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2016,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2017,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2017,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.0615,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Ростовская, 1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2018,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.43,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2018,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.43,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Мира, 82')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2009,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.086,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2009,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.086,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Пушкина, 123')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2004,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.258,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2004,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.258,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Маяковского, 1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2015,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.504,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2015,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.504,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, пл. Победы, 1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2011,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.865,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2011,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.865,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Мира, 94')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2011,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.43,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 2011,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 0.43,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г.Елец, пос. ТЭЦ')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1952,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1954,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1957,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1964,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1987,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1964,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1967,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'type_of_backup_fuel' => 'мазут',
                    'installed_capacity' => 21.14,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'г.Елец, сл.Александровка')->first()->boiler_room_id;
        BoilerRoomBoiler::insert(
            [
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1988,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.5,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1988,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.5,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
                [
                    'boiler_room_boiler_id' => Str::uuid()->toString(),
                    'boiler_room_id' => $boilerRoomId,
                    'operation_year' => 1988,
                    'building_renovation_year' => null,
                    'type_of_main_fuel' => 'газ',
                    'installed_capacity' => 1.5,
                    'owner_id' => $user,
                    'created_by' => $user,
                    'updated_by' => $user,
                ],
            ]
        );

        $boilerRoomId = BoilerRoom::where('address', 'Котельная, Липецкий р-н, с. Сухая Лубна, ул. Молодежная')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2021,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 4.3,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Котельная, Липецкий р-н, с. Подгорное, ул. Элеваторная, д. 1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1998,
                'building_renovation_year' => 2007,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 7.7,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Васильевский ФАП, Липецкая область, Липецкий р-н, с. Васильевка, пер. Тихий, д.7')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1988,
                'building_renovation_year' => 2015,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.009,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Вешаловский ФАП, Липецкая обл., Липецкий р-н, с. Вешаловка, ул. 8 Марта, д. 56а')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1991,
                'building_renovation_year' => 2016,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.009,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Грязновский ФАП, Липецкая область, Липецкий р-н, с. Грязное, ул. Ленинская, д. 27')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1989,
                'building_renovation_year' => 2017,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.019,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липецкая обл., Тербунский р-н., с. Тербуны, ул. Красноармейская, 4')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.008,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.008,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.008,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк р-он ул. К. Цеткин')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.075,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.075,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Данков, ул. Семеновского, д.13')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 130,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 130,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Баловнево ул. Новосоветская д.14')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2000,
                'building_renovation_year' => 2001,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 23,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Баловнево ул. Советская д.15')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => 0,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.0541705,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => 0,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.0541705,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с. Телепнево ул. Советская д.1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2019,
                'building_renovation_year' => 0,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.0344,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2019,
                'building_renovation_year' => 0,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.0344,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Хрущево - Подлесное ул. Центральная д.1/1')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2016,
                'building_renovation_year' => 0,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.03,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2016,
                'building_renovation_year' => 0,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.03,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липецкая обл., с. Волово, ул. Советсткая, д.111')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.945,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.945,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Первомайская, 65')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 6.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 6.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 6.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Социалистическая, 3')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1988,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1988,
                'building_renovation_year' => 2015,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1988,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1996,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. 30 лет Победы, 52')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1986,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1989,
                'building_renovation_year' => 2012,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Юбилейная, 3')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1987,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1988,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Привокзальная, 2а')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2005,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.143,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2005,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.143,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2005,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.143,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липекая область с.Доброе ул.Победы ,13')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1999,
                'building_renovation_year' => 2020,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'с. Пригородка ул. Лесная,4')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2011,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.55,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2011,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.55,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Усмань, ул. Карла Маркса, 118')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => 2000,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1994,
                'building_renovation_year' => 2008,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 1.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Усмань, ул.Льва Толстого,95а')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2010,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3.01,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2010,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3.01,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2010,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3.01,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2010,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 3.01,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Усмань, ул.Чернышевскрго,123в')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2010,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.75,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2010,
                'building_renovation_year' => null,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.75,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Усмань, ул.Комсомольская,22')->first()->boiler_room_id;
        BoilerRoomBoiler::insert([
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2003,
                'building_renovation_year' => 2010,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.07,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2003,
                'building_renovation_year' => 2012,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.07,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
            [
                'boiler_room_boiler_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2003,
                'building_renovation_year' => 2016,
                'type_of_main_fuel' => 'газ',
                'installed_capacity' => 0.07,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
    }
}
