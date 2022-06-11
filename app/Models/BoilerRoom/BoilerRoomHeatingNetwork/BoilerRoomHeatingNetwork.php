<?php

namespace App\Models\BoilerRoom\BoilerRoomHeatingNetwork;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BoilerRoom\BoilerRoomHeatingNetwork\BoilerRoomHeatingNetwork
 *
 * @property string $boiler_room_heating_network_id
 * @property int $operation_year
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereBoilerRoomHeatingNetworkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereOperationYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property float|null $pipeline_diameter
 * @property float|null $length_of_heating_main
 * @property string|null $number_of_pipelines_id
 * @property string|null $type_of_gasket_id
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomHeatingNetwork onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereLengthOfHeatingMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereNumberOfPipelinesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork wherePipelineDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomHeatingNetwork whereTypeOfGasketId($value)
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomHeatingNetwork withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomHeatingNetwork withoutTrashed()
 */
class BoilerRoomHeatingNetwork extends AbstractModel
{
    public static function resource(): string
    {
        return '';
    }

    protected $casts = [
        'operation_year' => 'integer',
        'pipeline_diameter' => 'double',
        'length_of_heating_main' => 'double',

    ];

    protected $table = 'boiler_room_heating_networks';
    protected $primaryKey = 'boiler_room_heating_network_id';

    protected $fillable = [
        'operation_year',
        'pipeline_diameter',
        'length_of_heating_main',
        'number_of_pipelines_id',
        'type_of_gasket_id',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [
    ];
}
