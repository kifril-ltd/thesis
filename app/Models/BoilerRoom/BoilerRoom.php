<?php

namespace App\Models\BoilerRoom;

use App\Http\Resources\BoilerRoom\BoilerRoomResource;
use App\Models\Utils\AbstractModel;
use App\Models\Utils\DefaultModelTrait;
use App\Models\Utils\GetterPrimaryKey;
use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

/**
 * App\Models\BoilerRoom\BoilerRoom
 *
 * @property string $boiler_room_id
 * @property string $title
 * @property string $municipality
 * @property float $temperature
 * @property string|null $mode
 * @property int|null $year_of_construction
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereBoilerRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereMunicipality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereYearOfConstruction($value)
 * @mixin \Eloquent
 * @property float $installed_capacity
 * @property float $available_capacity
 * @property int $number_chimneys
 * @property int $connected_homes
 * @property int $connected_budgets
 * @property int $connected_others
 * @property string|null $gas_consumption_device
 * @property string|null $thermal_energy_consumption_device
 * @property string|null $electricity_consumption_device
 * @property string|null $cold_water_consumption_device
 * @property int $power_inputs
 * @property bool $has_autonomous_power_supply_source
 * @property bool $has_equipment_for_power_supply
 * @property float $installed_electrical_capacity
 * @property int $building_renovation_year
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereAvailableCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereBuildingRenovationYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereColdWaterConsumptionDevice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereConnectedBudgets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereConnectedHomes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereConnectedOthers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereElectricityConsumptionDevice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereGasConsumptionDevice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereHasAutonomousPowerSupplySource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereHasEquipmentForPowerSupply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereInstalledCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereInstalledElectricalCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereNumberChimneys($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom wherePowerInputs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereThermalEnergyConsumptionDevice($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoom onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoom withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoom withoutTrashed()
 * @property string $basis_of_transfer_id
 * @property string $address_id
 * @property string $operating_organization_id
 * @property float|null $summ_hot_water_supply_for_homes
 * @property float|null $summ_hot_water_supply_for_social
 * @property string $seasonality_of_work_id
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereBasisOfTransferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereOperatingOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereSeasonalityOfWorkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereSummHotWaterSupplyForHomes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoom whereSummHotWaterSupplyForSocial($value)
 */
class BoilerRoom extends AbstractModel
{
    public static function resource(): string
    {
        return BoilerRoomResource::class;
    }

    protected $casts = [
        'temperature' => 'double',
        'year_of_construction' => 'integer',
        'installed_capacity' => 'double',
        'available_capacity' => 'double',
        'number_chimneys' => 'integer',
        'connected_homes' => 'integer',
        'connected_budgets' => 'integer',
        'connected_others' => 'integer',
        'power_inputs' => 'integer',
        'has_autonomous_power_supply_source' => 'boolean',
        'has_equipment_for_power_supply' => 'boolean',
        'installed_electrical_capacity' => 'double',
        'building_renovation_year' => 'integer',
    ];

    protected $table = 'boiler_rooms';
    protected $primaryKey = 'boiler_room_id';

    protected $fillable = [
        'title',
        'municipality',
        'temperature',
        'mode',
        'year_of_construction',
        'installed_capacity',
        'available_capacity',
        'number_chimneys',
        'connected_homes',
        'connected_budgets',
        'connected_others',
        'gas_consumption_device',
        'thermal_energy_consumption_device',
        'electricity_consumption_device',
        'cold_water_consumption_device',
        'power_inputs',
        'has_autonomous_power_supply_source',
        'has_equipment_for_power_supply',
        'installed_electrical_capacity',
        'building_renovation_year',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [
    ];
}
