<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkExpenditure;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkExpenditure\HeatingNetworkExpenditure
 *
 * @property string $heating_network_expenditure_id
 * @property int $year
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereHeatingNetworkExpenditureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkExpenditure whereYear($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkExpenditure onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkExpenditure withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkExpenditure withoutTrashed()
 */
class HeatingNetworkExpenditure extends AbstractModel
{
    protected $casts = [
        'year' => 'integer',


    ];

    protected $table = 'heating_network_expenditures';
    protected $primaryKey = 'heating_network_expenditure_id';

    protected $fillable = [
        'year',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
