<?php

namespace Database\Seeders\BoilerRoom;

use App\Models\BoilerRoom\BoilerRoom;
use App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler;
use App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure;
use App\Models\Meta\User\User;
use Illuminate\Database\Seeder;
use Str;

class BoilerRoomExpenditureSeeder extends Seeder
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
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 10259.6,
                'purchase_of_electricity' => 2027.1,
                'total' => 12286.7,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Катукова, влад. 51')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 4942.47,
                'purchase_of_electricity' => 736.21,
                'total' => 5678.68,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Гагарина 70 а')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 1088.09,
                'purchase_of_electricity' => 319.53,
                'total' => 1407.62,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. 8 Марта, строение 15б')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 6663,
                'purchase_of_electricity' => 1512,
                'total' => 8175,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. Тамбовская, д. 8')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 1050,
                'purchase_of_electricity' => 99.6,
                'total' => 1149.6,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк р-он ул. К. Цеткин')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 700,
                'purchase_of_electricity' => 0,
                'total' => 700,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. С.Казьмина, д.3а')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 19058,
                'purchase_of_electricity' => 0,
                'total' => 19058,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк ул. С.Казьмина, д.3а/1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 0,
                'purchase_of_electricity' => 0,
                'total' => 0,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 1Д')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 6079,
                'purchase_of_electricity' => 1666.87,
                'total' => 7745.87,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 3В')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 2905.77,
                'purchase_of_electricity' => 859.57,
                'total' => 3765.34,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Новолипецкая, 1П')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 166.92,
                'purchase_of_electricity' => 53.79,
                'total' => 220.70,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул Мира, 124В')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 415.19,
                'purchase_of_electricity' => 112.14,
                'total' => 527.34,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Л. Толстого, 4В')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 415.19,
                'purchase_of_electricity' => 112.14,
                'total' => 527.34,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Свердлова, 7В')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 151.59,
                'purchase_of_electricity' => 68.28,
                'total' => 219.87,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул 9 Декабря, 19В')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 287.90,
                'purchase_of_electricity' => 69.73,
                'total' => 357.62,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул Шоссейная, 1Б')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 281.45,
                'purchase_of_electricity' => 0,
                'total' => 281.45,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Ростовская, 1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 763.23,
                'purchase_of_electricity' => 178.5,
                'total' => 941.72,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Мира, 82')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 129.93,
                'purchase_of_electricity' => 0,
                'total' => 129.93,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Пушкина, 123')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 427.45,
                'purchase_of_electricity' => 117.13,
                'total' => 544.58,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Маяковского, 1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 845.46,
                'purchase_of_electricity' => 188.84,
                'total' => 1034.29,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, пл. Победы, 1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 611.69,
                'purchase_of_electricity' => 172.17,
                'total' => 783.86,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Елец, ул. Мира, 94')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 671.24,
                'purchase_of_electricity' => 168.46,
                'total' => 839.7,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Елец, пос. ТЭЦ')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 256457.81,
                'purchase_of_electricity' => 134.69,
                'total' => 256592.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Елец, сл.Александровка')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 5396.09,
                'purchase_of_electricity' => 2343.27,
                'total' => 7739.35,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липецкая обл., Тербунский р-н., с. Тербуны, ул. Красноармейская, 4')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 3920.537,
                'purchase_of_electricity' => 915.758,
                'total' => 4836.295,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Липецк р-он ул. К. Цеткин')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 700,
                'purchase_of_electricity' => 0,
                'total' => 700,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Данков, ул. Семеновского, д.13')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 328.226,
                'purchase_of_electricity' => 685.373,
                'total' => 1013.599,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Баловнево ул. Новосоветская д.14')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 40,
                'purchase_of_electricity' => 0,
                'total' => 40,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Баловнево ул. Советская д.15')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 109.207,
                'purchase_of_electricity' => 22.866,
                'total' => 132.073,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с. Телепнево ул. Советская д.1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 0,
                'purchase_of_electricity' => 0,
                'total' => 0,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'с.Хрущево - Подлесное ул. Центральная д.1/1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 0,
                'purchase_of_electricity' => 0,
                'total' => 0,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Котельная, Липецкий р-н, с. Сухая Лубна, ул. Молодежная')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 3845,
                'purchase_of_electricity' => 0,
                'total' => 3845,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Котельная, Липецкий р-н, с. Подгорное, ул. Элеваторная, д. 1')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 25436,
                'purchase_of_electricity' => 0,
                'total' => 25436,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Васильевский ФАП, Липецкая область, Липецкий р-н, с. Васильевка, пер. Тихий, д.7')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 23,
                'purchase_of_electricity' => 0,
                'total' => 23,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Вешаловский ФАП, Липецкая обл., Липецкий р-н, с. Вешаловка, ул. 8 Марта, д. 56а')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 25,
                'purchase_of_electricity' => 0,
                'total' => 25,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
        $boilerRoomId = BoilerRoom::where('address', 'Грязновский ФАП, Липецкая область, Липецкий р-н, с. Грязное, ул. Ленинская, д. 27')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 22,
                'purchase_of_electricity' => 0,
                'total' => 22,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липецкая обл., с. Волово, ул. Советсткая, д.111')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 2690.203,
                'purchase_of_electricity' => 869.99,
                'total' => 3560.193,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Первомайская, 65')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 26855.12,
                'purchase_of_electricity' => 9864.55,
                'total' => 36719.67,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Социалистическая, 3')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 6049.99,
                'purchase_of_electricity' => 1789.02,
                'total' => 7839.01,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. 30 лет Победы, 52')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 5467.25,
                'purchase_of_electricity' => 932.95,
                'total' => 6400.2,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Юбилейная, 3')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 942.8,
                'purchase_of_electricity' => 357.08,
                'total' => 1299.88,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Грязи, ул. Привокзальная, 2а')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 340.76,
                'purchase_of_electricity' => 74.63,
                'total' => 415.39,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'Липекая область с.Доброе ул.Победы ,13')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 1031.083,
                'purchase_of_electricity' => 1293.703,
                'total' => 2324.786,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'с. Пригородка ул. Лесная,4')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 690.5,
                'purchase_of_electricity' => 0,
                'total' => 690.5,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Усмань, ул. Карла Маркса, 118')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 4693.2,
                'purchase_of_electricity' => 0,
                'total' => 4693.2,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Усмань, ул.Льва Толстого,95а')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 16714.7,
                'purchase_of_electricity' => 0,
                'total' => 16714.7,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г.Усмань, ул.Чернышевскрго,123в')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 1448.8,
                'purchase_of_electricity' => 0,
                'total' => 1448.8,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);

        $boilerRoomId = BoilerRoom::where('address', 'г. Усмань, ул.Комсомольская,22')->first()->boiler_room_id;
        BoilerRoomExpenditure::insert([
            [
                'boiler_room_expenditure_id' => Str::uuid()->toString(),
                'boiler_room_id' => $boilerRoomId,
                'year' => 2020,
                'purchase_of_gas' => 216.3,
                'purchase_of_electricity' => 0,
                'total' => 216.3,
                'owner_id' => $user,
                'created_by' => $user,
                'updated_by' => $user,
            ],
        ]);
    }
}
