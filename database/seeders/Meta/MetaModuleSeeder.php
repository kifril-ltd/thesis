<?php

namespace Database\Seeders\Meta;

use App\Models\Meta\MetaModule\MetaModule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MetaModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetaModule::truncate();

        MetaModule::insert([
            'meta_module_id' => Str::Uuid()->toString(),
            'name' => 'system',
            'caption' => 'Модуль системы',
        ]);

        $systemModuleId = MetaModule::where('name', 'system')->first()->meta_module_id;

        $metaModules = [
            [
                'meta_module_id' => Str::Uuid()->toString(),
                'name' => 'thermal_power',
                'caption' => 'Модуль теплоэнергетики',
                'parent_id' => $systemModuleId,
            ],
            [
                'meta_module_id' => Str::Uuid()->toString(),
                'name' => 'metadata',
                'caption' => 'Модуль метаданных',
                'parent_id' => $systemModuleId,
            ],
            [
                'meta_module_id' => Str::Uuid()->toString(),
                'name' => 'electric_power',
                'caption' => 'Модуль электроэнергетики',
                'parent_id' => $systemModuleId,
            ],
            [
                'meta_module_id' => Str::Uuid()->toString(),
                'name' => 'gas_power',
                'caption' => 'Модуль газоснабжения',
                'parent_id' => $systemModuleId,
            ],
        ];

        MetaModule::insert($metaModules);
    }
}
