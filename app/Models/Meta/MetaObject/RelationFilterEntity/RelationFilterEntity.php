<?php

namespace App\Models\Meta\MetaObject\RelationFilterEntity;

use App\Models\Meta\MetaObject\JoinEntity\JoinEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Meta\MetaObject\RelationFilterEntity
 *
 * @property string $rel_filter_id
 * @property string $title
 * @property string $settings
 * @method static \Illuminate\Database\Eloquent\Builder|RelationFilterEntity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelationFilterEntity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelationFilterEntity query()
 * @mixin \Eloquent
 */
class RelationFilterEntity extends Model
{
    use HasFactory;

    protected $table = 'rel_filter_entities';

    protected $fillable = [
        'title',
        'settings',
    ];

}
