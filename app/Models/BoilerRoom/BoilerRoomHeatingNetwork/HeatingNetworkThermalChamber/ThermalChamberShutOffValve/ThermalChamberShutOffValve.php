<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberShutOffValve;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\ThermalChamberShutOffValve\ThermalChamberShutOffValve
 *
 * @property string $thermal_chamber_shut_off_valve_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve query()
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereThermalChamberShutOffValveId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThermalChamberShutOffValve whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|ThermalChamberShutOffValve onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|ThermalChamberShutOffValve withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ThermalChamberShutOffValve withoutTrashed()
 */
class ThermalChamberShutOffValve extends AbstractModel
{
    protected $casts = [
        'title' => 'string',
        'diameter' => 'double',
        'quantity' => 'integer',
    ];

    protected $table = 'thermal_chamber_shut_off_valves';
    protected $primaryKey = 'thermal_chamber_shut_off_valve_id';

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
