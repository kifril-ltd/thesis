<?php

namespace App\Models\BoilerRoom\BoilerRoomPumpingStation;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomPumpingStation\BoilerRoomPumpingStation
 *
 * @property string $boiler_room_pumping_station_id
 * @property string $title
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereBoilerRoomPumpingStationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomPumpingStation whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomPumpingStation onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomPumpingStation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomPumpingStation withoutTrashed()
 */
class BoilerRoomPumpingStation extends AbstractModel
{
    protected $casts = [
        'title' => 'string',
    ];

    protected $table = 'boiler_room_pumping_stations';
    protected $primaryKey = 'boiler_room_pumping_station_id';

    protected $fillable = [
        'title',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
