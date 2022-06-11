<?php

namespace App\Models\Meta\MetaKind;

use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Meta\MetaKind\MetaKind
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MetaKind newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaKind newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MetaKind query()
 * @mixin \Eloquent
 */
class MetaKind extends Model
{
    use UsesUuid;

    protected $table = 'meta_kinds';
    protected $primaryKey = 'meta_kind_id';
    protected $keyType = 'string';

    protected $fillable = [
        'link',
        'name',
        'caption',
        'desc',
    ];

    protected $hidden = [];

    public function structures()
    {
        return null; // TODO доработать
    }

    public $incrementing = false;
    public $timestamps = false;
}
