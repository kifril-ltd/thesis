<?php

namespace App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationRepair;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationRepair\PumpingStationRepair
 *
 * @property string $pumping_station_repair_id
 * @property string $type
 * @property string $date
 * @property float $expenditures
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair query()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereExpenditures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair wherePumpingStationRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationRepair whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|PumpingStationRepair onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationRepair withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationRepair withoutTrashed()
 */
class PumpingStationRepair extends AbstractModel
{
    protected $casts = [
        'type' => 'string',
        'date' => 'immutable_datetime',
        'expenditures' => 'double',
    ];

    protected $table = 'pumping_station_repairs';
    protected $primaryKey = 'pumping_station_repair_id';

    protected $fillable = [
        'type',
        'date',
        'expenditures',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
