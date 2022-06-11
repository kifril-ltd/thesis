<?php

namespace App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationExpenditure;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPumpingStation\PumpingStationExpenditure\PumpingStationExpenditure
 *
 * @property string $pumping_station_expenditure_id
 * @property int $year
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure query()
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure wherePumpingStationExpenditureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PumpingStationExpenditure whereYear($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|PumpingStationExpenditure onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationExpenditure withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PumpingStationExpenditure withoutTrashed()
 */
class PumpingStationExpenditure extends AbstractModel
{
    protected $casts = [
        'year' => 'integer',
    ];

    protected $table = 'pumping_station_expenditures';
    protected $primaryKey = 'pumping_station_expenditure_id';

    protected $fillable = [
        'year',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
