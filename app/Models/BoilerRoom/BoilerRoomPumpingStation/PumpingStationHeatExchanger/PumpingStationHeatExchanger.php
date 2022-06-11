<?php

namespace App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationHeatExchanger;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationHeatExchanger\PumpingStationHeatExchanger
 *
 * @property string $pumping_station_heat_exchanger_id
 * @property string $stamp
 * @property int $year
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger query()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger wherePumpingStationHeatExchangerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationHeatExchanger whereYear($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|PumpingStationHeatExchanger onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationHeatExchanger withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationHeatExchanger withoutTrashed()
 */
class PumpingStationHeatExchanger extends AbstractModel
{
    protected $casts = [
        'stamp' => 'string',
        'year' => 'integer',
    ];

    protected $table = 'pumping_station_heat_exchangers';
    protected $primaryKey = 'pumping_station_heat_exchanger_id';

    protected $fillable = [
        'stamp',
        'year',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
