<?php

namespace App\Models\Meta\MetaObject\JoinEntity;

use App\Models\Meta\MetaObject\MetaObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Meta\MetaObject\JoinEntity\JoinEntity
 *
 * @method static \Illuminate\Database\Eloquent\Builder|JoinEntity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JoinEntity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JoinEntity query()
 * @mixin \Eloquent
 */
class JoinEntity extends Model
{
    use HasFactory;

    protected $hidden = ['pivot'];

    public function source() {
        return $this->belongsTo(
            MetaObject::class,
            'source_id',
            'meta_object_id',
        );
    }

    public function foreing() {
        return $this->belongsTo(
            MetaObject::class,
            'source_col_id',
            'meta_object_id',
        );
    }

    public function target() {
        return $this->belongsTo(
            MetaObject::class,
            'target_id',
            'meta_object_id'
        );
    }
}
