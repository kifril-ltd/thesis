<?php

namespace App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationPump;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationPump\PumpingStationPump
 *
 * @property string $pumping_station_pump_id
 * @property string $stamp
 * @property string $boiler_room_pumping_station_id
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump query()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereBoilerRoomPumpingStationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump wherePumpingStationPumpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationPump whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|PumpingStationPump onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationPump withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationPump withoutTrashed()
 */
class PumpingStationPump extends AbstractModel
{
    protected $casts = [
        'stamp' => 'string',
    ];

    protected $table = 'pumping_station_pumps';
    protected $primaryKey = 'pumping_station_pump_id';

    protected $fillable = [
        'stamp',
        'boiler_room_pumping_station_id',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
