<?php

namespace App\Models\Utils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AbstractModel extends Model implements DefaultModelInterface
{
    use HasFactory, UsesUuid, SoftDeletes;

    public static function resource(): string
    {
        return self::class;
    }

    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    protected $keyType = 'string';

    public $incrementing = false;
    public $timestamps = true;

    protected $casts;

    protected $table;
    protected $primaryKey;

    protected $fillable;
    protected $hidden;
}
