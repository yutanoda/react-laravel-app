<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LinkProduct
 *
 * @property int $id
 * @property int $link_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct whereLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinkProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LinkProduct extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public $timestamps = false;
}
