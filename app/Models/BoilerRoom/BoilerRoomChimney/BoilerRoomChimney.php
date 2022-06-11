<?php

namespace App\Models\BoilerRoom\BoilerRoomChimney;

use App\Models\Utils\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\BoilerRoom\BoilerRoomChimney\BoilerRoomChimney
 *
 * @property string $boiler_room_chimney_id
 * @property string $designation
 * @property int $year_of_construction
 * @property string $owner_id
 * @property string $created_by
 * @property string $updated_by
 * @property string $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereBoilerRoomChimneyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoilerRoomChimney whereYearOfConstruction($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomChimney onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomChimney withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BoilerRoomChimney withoutTrashed()
 */
class BoilerRoomChimney extends AbstractModel
{
    protected $casts = [
        'designation' => 'string',
        'year_of_construction' => 'integer',
    ];

    protected $table = '';
    protected $primaryKey = '';

    protected $fillable = [
        'designation',
        'year_of_construction',
        'owner_id',
        'created_by',
        'updated_by',
        'status_id',
    ];

    protected $hidden = [];
}
