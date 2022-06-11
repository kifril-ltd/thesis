<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberResetDevice;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberResetDevice\ThermalChamberResetDevice
 *
 * @property string $thermal_chamber_reset_device_id
 * @property string $title
 * @property float $diameter
 * @property int $quantity
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereThermalChamberResetDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberResetDevice whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|ThermalChamberResetDevice onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|ThermalChamberResetDevice withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ThermalChamberResetDevice withoutTrashed()
 */
class ThermalChamberResetDevice extends AbstractModel
{
    protected $casts = [
        'title' => 'string',
        'diameter' => 'double',
        'quantity' => 'integer',
    ];

    protected $table = 'thermal_chamber_reset_devices';
    protected $primaryKey = 'thermal_chamber_reset_device_id';

    protected $fillable = [
        'title',
        'diameter',
        'quantity',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
