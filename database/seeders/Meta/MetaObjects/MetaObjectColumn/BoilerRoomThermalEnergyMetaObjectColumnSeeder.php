<?php

namespace Database\Seeders\Meta\MetaObjects\MetaObjectColumn;

use App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer;
use App\Models\BoilerRoom\BoilerRoomThermalEnergy\BoilerRoomThermalEnergy;
use App\Models\Meta\MetaKind\MetaKind;
use App\Models\Meta\MetaModule\MetaModule;
use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BoilerRoomThermalEnergyMetaObjectColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thermalModuleId = MetaModule::where('name', 'thermal_power')->first()->meta_module_id;
        $columnKindId = MetaKind::where('name', 'column')->first()->meta_kind_id;
        $commonAttrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'owner_id',
                'caption' => 'Владелец аттрибута',
                'desc' => 'Владелец аттрибута',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'created_by',
                'caption' => 'Создатель аттрибута',
                'desc' => 'Создатель аттрибута',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'updated_by',
                'caption' => 'Пользователь, вносивший изменения',
                'desc' => 'Пользователь, вносивший изменения',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'status_id',
                'caption' => 'Статус записи',
                'desc' => 'Статус записи, по умолчанию черновик. Еще статусы: активный, удаленный, импортированный',
            ],
        ];

        $boiler_room_thermal_energy_attrs = [
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_thermal_energy_id',
                'caption' => 'Идентификатор тепловой отдачи котельной',
                'desc' => 'Идентификатор тепловой отдачи котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'boiler_room_id',
                'caption' => 'Идентификатор котельной',
                'desc' => 'Идентификатор котельной',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'year',
                'caption' => 'Год',
                'desc' => 'Год',
            ],
            [
                'meta_object_id' => Str::Uuid()->toString(),
                'object' => 'volume_of_heat_energy_release',
                'caption' => 'Годовой объем отпуска тепловой энергии потребителям',
                'desc' => 'Годовой объем отпуска тепловой энергии потребителям, Гкал',
            ],
        ];

        array_push($boiler_room_thermal_energy_attrs, ...$commonAttrs);

        foreach ($boiler_room_thermal_energy_attrs as &$attr) {
            $attr['meta_module_id'] = $thermalModuleId;
            $attr['meta_kind_id'] = $columnKindId;
            $attr['name'] = 'meta_' . 'boiler_room_thermal_energy_' . $attr['object'];
            $attr['class_name'] = BoilerRoomThermalEnergy::class;
        }

        MetaObject::insert($boiler_room_thermal_energy_attrs);
    }
}
