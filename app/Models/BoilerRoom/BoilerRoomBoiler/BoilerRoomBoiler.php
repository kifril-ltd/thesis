<?php

namespace App\Models\BoilerRoom\BoilerRoomBoiler;

use App\Models\Utils\AbstractModel;
use App\Models\Utils\DefaultModelTrait;
use App\Models\Utils\GetterPrimaryKey;
use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BoilerRoom\BoilerRoomBoiler\BoilerRoomBoiler
 *
 * @property string $boiler_room_boiler_id
 * @property string $stamp
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereBoilerRoomBoilerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property float $installed_capacity
 * @property float $available_power
 * @property int $operation_year
 * @property string|null $type_of_backup_fuel
 * @property int $building_renovation_year
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereAvailablePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereBuildingRenovationYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereInstalledCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereOperationYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomBoiler whereTypeOfBackupFuel($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomBoiler onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomBoiler withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomBoiler withoutTrashed()
 */
class BoilerRoomBoiler extends AbstractModel
{
    public static function resource(): string
    {
        return BoilerRoomBoiler::class;
    }

    protected $casts = [
        'installed_capacity' => 'double',
        'available_power' => 'double',
        'operation_year' => 'integer',
        'building_renovation_year' => 'integer',
    ];

    protected $table = 'boiler_room_boilers';
    protected $primaryKey = 'boiler_room_boiler_id';

    protected $fillable = [
        'stamp',
        'installed_capacity',
        'available_power',
        'operation_year',
        'building_renovation_year',
        'type_of_backup_fuel',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [
    ];
}
