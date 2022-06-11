<?php

namespace Database\Seeders\User;

use App\Models\Meta\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
                'user_id' => $_ENV['USER_ADMIN_ID'],
                'first_name' => 'Админ',
                'last_name' => 'Админ',
                'middle_name' => 'Админ',
                'login' => 'admin',
                'email' => 'admin@admin.com',
                'phone' => 89045671980,
                'password' =>  Hash::make('Tek123$'),
                'activated_at' => now(),
            ],
            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Иванов',
                'last_name' => 'Иван',
                'middle_name' => 'Иванович',
                'login' => 'testUser',
                'email' => 'user@user.com',
                'phone' => 89045671981,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],
            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Акционерное общество "Транснефть-Дружба"',
                'last_name' => '',
                'middle_name' => '',
                'login' => '1',
                'email' => '1@user.com',
                'phone' => 80000000001,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],
            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Акционерное общество Продовольственная компания "ЛИМАК"',
                'last_name' => '',
                'middle_name' => '',
                'login' => '2',
                'email' => '2@user.com',
                'phone' => 80000000002,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],
            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Управление земельных и имущественных отношений Липецкой области',
                'last_name' => '',
                'middle_name' => '',
                'login' => '3',
                'email' => '3@user.com',
                'phone' => 80000000003,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],
            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'ОГУП "ЛОКК"',
                'last_name' => '',
                'middle_name' => '',
                'login' => '4',
                'email' => '4@user.com',
                'phone' => 80000000004,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'администрация сельского поселения Боринский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '5',
                'email' => '5@user.com',
                'phone' => 80000000005,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'ОАО "Газпром газораспределение Липецк",87/100; администрация сельского поселения Новодеревенский сельсовет ,13/100',
                'last_name' => '',
                'middle_name' => '',
                'login' => '6',
                'email' => '6@user.com',
                'phone' => 80000000006,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'ОАО "Газпром газораспределение Липецк"',
                'last_name' => '',
                'middle_name' => '',
                'login' => '7',
                'email' => '7@user.com',
                'phone' => 80000000007,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'администрация сельского поселения Ленинский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '8',
                'email' => '8@user.com',
                'phone' => 80000000008,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Публичное акционерное общество "Квадра - Липецкая генерация"',
                'last_name' => '',
                'middle_name' => '',
                'login' => '9',
                'email' => '9@user.com',
                'phone' => 80000000009,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского порселения Падовский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '10',
                'email' => '10@user.com',
                'phone' => 80000000010,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского порселения Кузьмино-Отвержский  сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '11',
                'email' => '11@user.com',
                'phone' => 80000000011,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Боринский сельсовет Липецкого  муниципального района Липецкой области',
                'last_name' => '',
                'middle_name' => '',
                'login' => '12',
                'email' => '12@user.com',
                'phone' => 80000000012,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация Липецкого муниципального района',
                'last_name' => '',
                'middle_name' => '',
                'login' => '13',
                'email' => '13@user.com',
                'phone' => 80000000013,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Боринский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '14',
                'email' => '14@user.com',
                'phone' => 80000000014,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Косыревский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '15',
                'email' => '15@user.com',
                'phone' => 80000000015,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Крутохуторской сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '16',
                'email' => '16@user.com',
                'phone' => 80000000016,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Лубновский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '17',
                'email' => '17@user.com',
                'phone' => 80000000017,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Новодеревенский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '18',
                'email' => '18@user.com',
                'phone' => 80000000018,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Сенцовский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '19',
                'email' => '19@user.com',
                'phone' => 80000000019,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => 'Администрация сельского поселения Сырский сельсовет',
                'last_name' => '',
                'middle_name' => '',
                'login' => '20',
                'email' => '20@user.com',
                'phone' => 80000000020,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],

            [
                'user_id' =>  Str::Uuid()->toString(),
                'first_name' => '-',
                'last_name' => '',
                'middle_name' => '',
                'login' => 'null',
                'email' => 'no@user.com',
                'phone' => 80000000000,
                'password' => Hash::make('test'),
                'activated_at' => now(),
            ],
        ]);
    }
}
