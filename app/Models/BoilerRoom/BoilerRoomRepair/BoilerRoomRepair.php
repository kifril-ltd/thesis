<?php

namespace App\Models\BoilerRoom\BoilerRoomRepair;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomRepair\BoilerRoomRepair
 *
 * @property string $boiler_room_repair_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereBoilerRoomRepairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereExpenditures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomRepair whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomRepair onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomRepair withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomRepair withoutTrashed()
 */
class BoilerRoomRepair extends AbstractModel
{
    protected $casts = [
        'type' => 'string',
        'date' => 'immutable_datetime',
        'expenditures' => 'double',
    ];

    protected $table = 'boiler_room_repairs';
    protected $primaryKey = 'boiler_room_repair_id';

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
