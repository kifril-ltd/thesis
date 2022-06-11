<?php

namespace App\Models\Address;

use App\Models\Utils\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Address\Address
 *
 * @property string $address_id
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereTitle($value)
 * @mixin \Eloquent
 */
class Address extends Model
{
    use HasFactory, UsesUuid;
}
