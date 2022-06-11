<?php

namespace App\Models\BoilerRoom\BoilerRoomThermalEnergy;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomThermalEnergy\BoilerRoomThermalEnergy
 *
 * @property string $boiler_room_thermal_energy_id
 * @property int $year
 * @property float $volume
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereBoilerRoomThermalEnergyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereYear($value)
 * @mixin \Eloquent
 * @property float $volume_of_heat_energy_release
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomThermalEnergy onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomThermalEnergy whereVolumeOfHeatEnergyRelease($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomThermalEnergy withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomThermalEnergy withoutTrashed()
 */
class BoilerRoomThermalEnergy extends AbstractModel
{
    protected $casts = [
        'year' => 'integer',
        'volume' => 'double',
        'volume_of_heat_energy_release' => 'double',
    ];

    protected $table = 'boiler_room_thermal_energies';
    protected $primaryKey = 'boiler_room_thermal_energy_id';

    protected $fillable = [
        'year',
        'volume',
        'volume_of_heat_energy_release',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [
    ];
}
