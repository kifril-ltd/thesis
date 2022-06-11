<?php

namespace App\Models\BoilerRoom\BoilerRoomConsumer;

use App\Models\Utils\AbstractModel;
use App\Models\Utils\DefaultModelTrait;
use App\Models\Utils\GetterPrimaryKey;
use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BoilerRoom\BoilerRoomConsumer\BoilerRoomConsumer
 *
 * @property string $boiler_room_consumer_id
 * @property string $title
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereBoilerRoomConsumerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property float $heating
 * @property float $hot_water_supply
 * @property float $ventilation
 * @property float $volume
 * @property int $residents
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereHeating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereHotWaterSupply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereResidents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereVentilation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomConsumer whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomConsumer onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomConsumer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomConsumer withoutTrashed()
 */
class BoilerRoomConsumer extends AbstractModel
{
    public static function resource(): string
    {
        return BoilerRoomConsumer::class;
    }

    protected $casts = [
        'heating' => 'double',
        'hot_water_supply' => 'double',
        'ventilation' => 'double',
        'volume' => 'double',
        'residents' => 'integer',
    ];

    protected $table = 'boiler_room_consumers';
    protected $primaryKey = 'boiler_room_consumer_id';

    protected $fillable = [
        'title',
        'heating',
        'hot_water_supply',
        'ventilation',
        'volume',
        'residents',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [
    ];
}
