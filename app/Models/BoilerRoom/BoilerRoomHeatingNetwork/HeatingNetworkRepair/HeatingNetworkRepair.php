<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkRepair;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkRepair\HeatingNetworkRepair
 *
 * @property string $heating_network_repair_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereExpenditures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereHeatingNetworkRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkRepair whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkRepair onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkRepair withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkRepair withoutTrashed()
 */
class HeatingNetworkRepair extends AbstractModel
{
    protected $casts = [
        'type' => 'string',
        'date' => 'immutable_datetime',
        'expenditures' => 'double',

    ];

    protected $table = 'heating_network_repairs';
    protected $primaryKey = 'heating_network_repair_id';

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
