<?php

namespace App\Models\BoilerRoom\BoilerRoomEquipment;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomEquipment\BoilerRoomEquipment
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment query()
 * @mixin \Eloquent
 * @property string $boiler_room_equipment_id
 * @property string $stamp
 * @property int $year
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomEquipment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereBoilerRoomEquipmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomEquipment whereYear($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomEquipment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomEquipment withoutTrashed()
 */
class BoilerRoomEquipment extends AbstractModel
{
    protected $casts = [
        'stamp' => 'string',
        'year' => 'integer',

    ];

    protected $table = 'boiler_room_equipments';
    protected $primaryKey = 'boiler_room_equipment_id';

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
