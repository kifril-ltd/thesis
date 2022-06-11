<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkThermalChamber\HeatingNetworkThermalChamber
 *
 * @property string $heating_network_thermal_chamber_id
 * @property string $designation
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereHeatingNetworkThermalChamberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkThermalChamber whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkThermalChamber onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkThermalChamber withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkThermalChamber withoutTrashed()
 */
class HeatingNetworkThermalChamber extends AbstractModel
{
    protected $casts = [
        'designation' => 'string',
    ];

    protected $table = 'heating_network_thermal_chambers';
    protected $primaryKey = 'heating_network_thermal_chamber_id';

    protected $fillable = [
        'designation',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
