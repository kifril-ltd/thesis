<?php

namespace Database\Seeders\BoilerRoom;

use App\Models\BoilerRoom\BoilerRoom;
use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork;
use App\Models\Meta\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomHeatingNetworkSeeder extends Seeder
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
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'pipeline_diameter' => 130,
                'length_of_heating_main' => 1085,
                'number_of_pipelines' => 4,
                'type_of_gasket' => 'Воздушка - 101 м. Подземка бесканальная -984 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Катукова, влад. 51')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2017,
                'pipeline_diameter' => 160,
                'length_of_heating_main' => 22.52,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Гагарина 70 а')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2016,
                'pipeline_diameter' => 159,
                'length_of_heating_main' => 31,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 10 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. 8 Марта, строение 15б')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'pipeline_diameter' => 133,
                'length_of_heating_main' => 400,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'беcканальная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Тамбовская, д. 8')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2015,
                'pipeline_diameter' => 108,
                'length_of_heating_main' => 14,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале -140 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк р-он ул. К. Цеткин')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'pipeline_diameter' => 89,
                'length_of_heating_main' => 100,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземная в канале - 100 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. С.Казьмина, д.3а')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2016,
                'pipeline_diameter' => 133,
                'length_of_heating_main' => 1810,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'подземная бесканальная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. С.Казьмина, д.3а/1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2016,
                'pipeline_diameter' => 133,
                'length_of_heating_main' => 1810,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'подземная бесканальная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 1Д')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'pipeline_diameter' => 110,
                'length_of_heating_main' => 2300.70,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушная, подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 3В')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2007,
                'pipeline_diameter' => 110,
                'length_of_heating_main' => 979,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушная, подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 1П')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2002,
                'pipeline_diameter' => 89,
                'length_of_heating_main' => 18.07,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул Мира, 124В')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2004,
                'pipeline_diameter' => 57,
                'length_of_heating_main' => 34.2,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Надземная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Л. Толстого, 4В')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2003,
                'pipeline_diameter' => 102,
                'length_of_heating_main' => 85.6,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Свердлова, 7В')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'pipeline_diameter' => 57,
                'length_of_heating_main' => 35.1,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул 9 Декабря, 19В')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2006,
                'pipeline_diameter' => 75,
                'length_of_heating_main' => 125.5,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул Шоссейная, 1Б')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2004,
                'pipeline_diameter' => 89,
                'length_of_heating_main' => 22.1,
                'number_of_pipelines' => 3,
                'type_of_gasket' => 'Подземная в непроходном канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Ростовская, 1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1998,
                'pipeline_diameter' => 65,
                'length_of_heating_main' => 384,
                'number_of_pipelines' => 4,
                'type_of_gasket' => 'Подземка в канале - 384 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Мира, 82')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1997,
                'pipeline_diameter' => 76,
                'length_of_heating_main' => 40,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 40 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Пушкина, 123')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1997,
                'pipeline_diameter' => 58,
                'length_of_heating_main' => 217,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 217 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Маяковского, 1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1998,
                'pipeline_diameter' => 75,
                'length_of_heating_main' => 578,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 578 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, пл. Победы, 1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2012,
                'pipeline_diameter' => 150,
                'length_of_heating_main' => 64.6,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 64,6 м',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Мира, 94')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2013,
                'pipeline_diameter' => 77,
                'length_of_heating_main' => 288.95,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 289 м',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Елец, пос. ТЭЦ')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1952,
                'pipeline_diameter' => 380,
                'length_of_heating_main' => 35797,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'воздушная, подземная в канале, подземная беcканальная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Елец, сл.Александровка')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1986,
                'pipeline_diameter' => 204,
                'length_of_heating_main' => 995,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'подземная в канале',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липецкая обл., с. Волово, ул. Советсткая, д.111')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1995,
                'pipeline_diameter' => 110.27,
                'length_of_heating_main' => 2080.5,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушка -1946,45 м. Подземка в канале -134,05 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Первомайская, 65')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1987,
                'pipeline_diameter' => 147.05,
                'length_of_heating_main' => 7300,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземная в канале - 7300 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Социалистическая, 3')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1977,
                'pipeline_diameter' => 98.21,
                'length_of_heating_main' => 5636,
                'number_of_pipelines' => 4,
                'type_of_gasket' => 'Воздушная - 954 м. Подземная в канале - 4682 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. 30 лет Победы, 52')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1982,
                'pipeline_diameter' => 107.28,
                'length_of_heating_main' => 2464,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушная - 684 м. Подземная в канале - 1780 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Юбилейная, 3')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1987,
                'pipeline_diameter' => 76.78,
                'length_of_heating_main' => 1530,
                'number_of_pipelines' => 3,
                'type_of_gasket' => 'Воздушная - 231 м. Подземная в канале - 1299 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Привокзальная, 2а')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1999,
                'pipeline_diameter' => 108,
                'length_of_heating_main' => 827,
                'number_of_pipelines' => 4,
                'type_of_gasket' => 'подземный  527 надремный в ж/б локтах-300м\п',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'с. Пригородка ул. Лесная,4')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2011,
                'pipeline_diameter' => 76,
                'length_of_heating_main' => 531,
                'number_of_pipelines' => 4,
                'type_of_gasket' => 'Воздушка-471 м Подземка в канале- 60 м',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Усмань, ул. Карла Маркса, 118')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1981,
                'pipeline_diameter' => 159,
                'length_of_heating_main' => 1591,
                'number_of_pipelines' => 4,
                'type_of_gasket' => 'Воздушка-156 м Подземная безканальная-178 м Подземка в канале-1257',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Усмань, ул.Льва Толстого,95а')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1980,
                'pipeline_diameter' => 219,
                'length_of_heating_main' => 15100,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушка-600 м Подземная безканальная-1500 м Подземка в канале- 13000 м',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Усмань, ул.Чернышевскрго,123в')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1998,
                'pipeline_diameter' => 76,
                'length_of_heating_main' => 972,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушка-60 м Подземка в канале-912 м',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Усмань, ул.Комсомольская,22')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2001,
                'pipeline_diameter' => 57,
                'length_of_heating_main' => 20,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Воздушка- 10 м Подземка в канале -10 м',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липецкая обл., Тербунский р-н., с. Тербуны, ул. Красноармейская, 4')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1990,
                'pipeline_diameter' => 139.48,
                'length_of_heating_main' => 3111,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 3110,6 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк р-он ул. К. Цеткин')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2008,
                'pipeline_diameter' => 89,
                'length_of_heating_main' => 100,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'Подземка в канале - 100 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Данков, ул. Семеновского, д.13')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => null,
                'pipeline_diameter' => null,
                'length_of_heating_main' => null,
                'number_of_pipelines' => 2,
                'type_of_gasket' => 'воздушная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Баловнево ул. Новосоветская д.14')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => null,
                'pipeline_diameter' => null,
                'length_of_heating_main' => null,
                'number_of_pipelines' => null,
                'type_of_gasket' => null,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Баловнево ул. Советская д.15')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2012,
                'pipeline_diameter' => 57,
                'length_of_heating_main' => null,
                'number_of_pipelines' => null,
                'type_of_gasket' => 'Подземка в канале -50 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с. Телепнево ул. Советская д.1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2019,
                'pipeline_diameter' => 50,
                'length_of_heating_main' => null,
                'number_of_pipelines' => null,
                'type_of_gasket' => 'подземка в канале -12 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Хрущево - Подлесное ул. Центральная д.1/1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 2016,
                'pipeline_diameter' => 159,
                'length_of_heating_main' => null,
                'number_of_pipelines' => null,
                'type_of_gasket' => 'подземка в канале -30 м.',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Котельная, Липецкий р-н, с. Сухая Лубна, ул. Молодежная')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1998,
                'pipeline_diameter' => 108,
                'length_of_heating_main' => 0.53,
                'number_of_pipelines' => '2-х трубная',
                'type_of_gasket' => 'подземная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Котельная, Липецкий р-н, с. Подгорное, ул. Элеваторная, д. 1')->first()->boiler_room_id;
        BoilerRoomHeatingNetwork::insert([
            [
                'boiler_room_heating_network_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'operation_year' => 1998,
                'pipeline_diameter' => 108,
                'length_of_heating_main' => 1.6,
                'number_of_pipelines' => '4-х трубная',
                'type_of_gasket' => 'подземная',
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ]
        ]);
    }
}
