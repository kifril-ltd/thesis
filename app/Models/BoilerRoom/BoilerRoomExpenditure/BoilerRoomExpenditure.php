<?php

namespace App\Models\BoilerRoom\BoilerRoomExpenditure;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomExpenditure\BoilerRoomExpenditure
 *
 * @property string $boiler_room_expenditure_id
 * @property int $year
 * @property float $gas_volume
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereBoilerRoomExpenditureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereGasVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure whereYear($value)
 * @mixin \Eloquent
 * @property float|null $purchase_of_gas
 * @property float|null $purchase_of_electricity
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomExpenditure onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure wherePurchaseOfElectricity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomExpenditure wherePurchaseOfGas($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomExpenditure withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomExpenditure withoutTrashed()
 */
class BoilerRoomExpenditure extends AbstractModel
{
    protected $casts = [
        'year' => 'integer',
        'gas_volume' => 'double',

    ];

    protected $table = 'boiler_room_expenditures';
    protected $primaryKey = 'boiler_room_expenditure_id';

    protected $fillable = [
        'year',
        'gas_volume',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
