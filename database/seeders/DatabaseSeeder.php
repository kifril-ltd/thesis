<?php

namespace Database\Seeders;

use App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork;
use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\MetaObject;
use Database\Seeders\BoilerRoom\BoilerRoomBoilerSeeder;
use Database\Seeders\BoilerRoom\BoilerRoomExpenditureSeeder;
use Database\Seeders\BoilerRoom\BoilerRoomHeatingNetworkSeeder;
use Database\Seeders\BoilerRoom\BoilerRoomSeeder;
use Database\Seeders\Meta\JoinEntity\JoinEntitySeeder;
use Database\Seeders\Meta\MetaColumns\BoilerConsumerMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomBoilerMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomChimneyMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomEquipmentMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomExpenditureMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomHeatingNetworkMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomPumpMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomRepairMetaColumnSeeder;
use Database\Seeders\Meta\MetaColumns\BoilerRoomThermalEnergyMetaColumnSeeder;
use Database\Seeders\Meta\MetaKindSeeder;
use Database\Seeders\Meta\MetaModuleSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomAccidentMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomConsumerMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomHeatingNetworkExpenditureMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomBoilerMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomChimneyMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomEquipmentMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomExpenditureMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomPumpingStationMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomPumpMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomRepairMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\BoilerRoomThermalEnergyMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\HeatingNetworkAccidentMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\HeatingNetworkChamberMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\HeatingNetworkMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\HeatingNetworkRepairMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\PumpingStationAccidentMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\PumpingStationExpenditureMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\PumpingStationHeatExchangerMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\PumpingStationPumpMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\PumpingStationRepairMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\ThermalChamberResetDeviceMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectColumn\ThermalChamberShutOffValveMetaObjectColumnSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectJoinSeeder;
use Database\Seeders\Meta\MetaObjects\MetaObjectSeeder;
use Database\Seeders\User\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('Database\Seeders\Address\AddressSeeder');
        //        $this->call('Database\Seeders\Structure\StructureListSeeder');
        //        $this->call('Database\Seeders\Structure\StructureListValueSeeder');
        //        $this->call('Database\Seeders\Structure\StructureSeeder');
        //        $this->call('Database\Seeders\Structure\StructureAttributeSeeder');
        $this->call(UserSeeder::class);
        //        $this->call('Database\Seeders\BoilerRoom\BoilerRoomSeeder');
        //        $this->call('Database\Seeders\BoilerRoom\BoilerRoomExpenditureSeeder');
        //        $this->call('Database\Seeders\BoilerRoom\BoilerRoomHeatingNetworkSeeder');
        //        $this->call('Database\Seeders\BoilerRoom\HeatingNetworkAccidentSeeder');
        //        $this->call('Database\Seeders\BoilerRoom\BoilerRoomThermalEnergySeeder');
        //        $this->call('Database\Seeders\BoilerRoom\BoilerRoomBoilerSeeder');
        //        $this->call('Database\Seeders\BoilerRoom\BoilerRoomConsumerSeeder');

        $this->call(BoilerRoomSeeder::class);
        $this->call(BoilerRoomBoilerSeeder::class);
        $this->call(BoilerRoomHeatingNetworkSeeder::class);
        $this->call(BoilerRoomExpenditureSeeder::class);

        $this->call(MetaModuleSeeder::class);
        $this->call(MetaKindSeeder::class);

        MetaObject::truncate();
        $this->call(MetaObjectSeeder::class);
        $this->call(BoilerRoomMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomConsumerMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomBoilerMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomPumpMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomEquipmentMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomChimneyMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomThermalEnergyMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomExpenditureMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomRepairMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomAccidentMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomHeatingNetworkExpenditureMetaObjectColumnSeeder::class);
        $this->call(HeatingNetworkMetaObjectColumnSeeder::class);
        $this->call(HeatingNetworkAccidentMetaObjectColumnSeeder::class);
        $this->call(HeatingNetworkRepairMetaObjectColumnSeeder::class);
        $this->call(HeatingNetworkChamberMetaObjectColumnSeeder::class);
        $this->call(ThermalChamberShutOffValveMetaObjectColumnSeeder::class);
        $this->call(ThermalChamberResetDeviceMetaObjectColumnSeeder::class);
        $this->call(BoilerRoomPumpingStationMetaObjectColumnSeeder::class);
        $this->call(PumpingStationPumpMetaObjectColumnSeeder::class);
        $this->call(PumpingStationAccidentMetaObjectColumnSeeder::class);
        $this->call(PumpingStationRepairMetaObjectColumnSeeder::class);
        $this->call(PumpingStationExpenditureMetaObjectColumnSeeder::class);
        $this->call(PumpingStationHeatExchangerMetaObjectColumnSeeder::class);

        EntityCol::truncate();
        $this->call(BoilerMetaColumnSeeder::class);
//        $this->call(BoilerConsumerMetaColumnSeeder::class);
        $this->call(BoilerRoomBoilerMetaColumnSeeder::class);
//        $this->call(BoilerRoomPumpMetaColumnSeeder::class);
//        $this->call(BoilerRoomEquipmentMetaColumnSeeder::class);
//        $this->call(BoilerRoomChimneyMetaColumnSeeder::class);
//        $this->call(BoilerRoomThermalEnergyMetaColumnSeeder::class);
        $this->call(BoilerRoomExpenditureMetaColumnSeeder::class);
        $this->call(BoilerRoomHeatingNetworkMetaColumnSeeder::class);

        $this->call(MetaObjectJoinSeeder::class);
        $this->call(JoinEntitySeeder::class);
    }
}
