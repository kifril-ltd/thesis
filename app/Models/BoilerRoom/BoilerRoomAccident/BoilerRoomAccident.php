<?php

namespace App\Models\BoilerRoom\BoilerRoomAccident;

use App\Models\Utils\AbstractModel;
use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BoilerRoom\BoilerRoomAccident\BoilerRoomAccident
 *
 * @property string $boiler_room_accident_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereBoilerRoomAccidentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereDetectionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereEliminationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomAccident whereUpdatedBy($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomAccident onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomAccident withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomAccident withoutTrashed()
 */
class BoilerRoomAccident extends AbstractModel
{
    public static function resource(): string
    {
        return '';
    }

    protected $casts = [
        'detection_date' => 'immutable_datetime',
        'elimination_date' => 'immutable_datetime',
        'mode' => 'string',
    ];


    protected $fillable = [
        'detection_date',
        'elimination_date',
        'mode',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $table = 'boiler_room_accidents';
    protected $primaryKey = 'boiler_room_accident_id';

    protected $hidden = [
    ];
}
