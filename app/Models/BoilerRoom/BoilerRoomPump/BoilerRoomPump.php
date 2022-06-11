<?php

namespace App\Models\BoilerRoom\BoilerRoomPump;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPump\BoilerRoomPump
 *
 * @property string $boiler_room_pump_id
 * @property string $stamp
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereBoilerRoomPumpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPump whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomPump onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomPump withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomPump withoutTrashed()
 */
class BoilerRoomPump extends AbstractModel
{
    protected $casts = [
        'stamp' => 'string',
    ];

    protected $table = 'boiler_room_pumps';
    protected $primaryKey = 'boiler_room_pump_id';

    protected $fillable = [
        'stamp',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
