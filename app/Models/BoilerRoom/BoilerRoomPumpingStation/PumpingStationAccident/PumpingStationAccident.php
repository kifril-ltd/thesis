<?php

namespace App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationAccident;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationAccident\PumpingStationAccident
 *
 * @property string $pumping_station_accident_id
 * @property string $detection_date
 * @property string $elimination_date
 * @property string $mode
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident query()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereDetectionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereEliminationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident wherePumpingStationAccidentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationAccident whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|PumpingStationAccident onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationAccident withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationAccident withoutTrashed()
 */
class PumpingStationAccident extends AbstractModel
{
    protected $casts = [
        'detection_date' => 'immutable_datetime',
        'elimination_date' => 'immutable_datetime',
        'mode' => 'string',
    ];

    protected $table = 'pumping_station_accidents';
    protected $primaryKey = 'pumping_station_accident_id';

    protected $fillable = [
        'detection_date',
        'elimination_date',
        'mode',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
