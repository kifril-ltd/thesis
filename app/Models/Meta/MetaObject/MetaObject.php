<?php

namespace App\Models\Meta\MetaObject;

use App\Models\Meta\MetaObject\EntityCol\EntityCol;
use App\Models\Meta\MetaObject\JoinEntity\JoinEntity;
use App\Models\Utils\UsesUuid;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Meta\MetaObject\MetaObject
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MetaObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaObject query()
 * @mixin Eloquent
 */
class MetaObject extends Model
{
    use UsesUuid;

    protected $table = 'meta_objects';
    protected $primaryKey = 'meta_object_id';
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'object',
        'caption',
        'desc',
        'row_id',
        'origin_id',
        'meta_kind_id',
        'meta_module_id',
        'class_name',
    ];

    protected $hidden = ['pivot'];

    public function childrenMetaObjects(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Meta\MetaObject', 'origin_id', 'meta_object_id')
            ->with('childrenMetaObjects');
    }

    public function columns()
    {
        return $this->belongsToMany(
            MetaObject::class,
            'entity_cols',
            'meta_obj_dataset_id',
            'meta_obj_id'
        )
            ->select(['caption', 'object']);
    }

    public function relations()
    {
        return $this->hasMany(
          JoinEntity::class,
          'source_id',
            'meta_object_id'
        );
    }

    public $incrementing = false;
    public $timestamps = false;
}
