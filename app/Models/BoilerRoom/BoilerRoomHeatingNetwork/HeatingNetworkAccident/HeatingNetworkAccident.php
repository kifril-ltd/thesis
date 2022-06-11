<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkAccident;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\HeatingNetworkAccident\HeatingNetworkAccident
 *
 * @property string $heating_network_accident_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereDetectionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereEliminationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereHeatingNetworkAccidentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property int|null $number_of_gusts
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkAccident onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HeatingNetworkAccident whereNumberOfGusts($value)
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkAccident withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HeatingNetworkAccident withoutTrashed()
 */
class HeatingNetworkAccident extends AbstractModel
{
    protected $casts = [
        'detection_date' => 'immutable_datetime',
        'elimination_date' => 'immutable_datetime',
        'mode' => 'string',

    ];

    protected $table = 'heating_network_accidents';
    protected $primaryKey = 'heating_network_accident_id';

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
