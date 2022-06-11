<?php

namespace App\Models\Structure;

use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\Structure\Structure
 *
 * @property string $structure_id
 * @property string $title
 * @property string $caption
 * @property string $description
 * @property bool $is_secured
 * @property string|null $structure_parent_id
 * @method static \Illuminate\Database\Eloquent\Builder|Structure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Structure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Structure query()
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereIsSecured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereStructureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereStructureParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereTitle($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|Structure[] $childrenStructures
 * @property-read int|null $children_structures_count
 * @property-read int|null $attributes_count
 */
class Structure extends Model
{
    use UsesUuid;

    protected $table = 'structures';
    protected $primaryKey = 'structure_id';
    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'caption',
        'description',
        'is_secured',
        'structure_parent_id',
    ];

    protected $hidden = [
        'title',
    ];

    public function childrenStructures(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Structure\Structure', 'structure_parent_id', 'structure_id')
            ->with('childrenStructures');
    }

    public function attributes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Structure\StructureAttribute\StructureAttribute', 'structure_id', 'structure_id');
    }

    public $incrementing = false;
    public $timestamps = false;
}
