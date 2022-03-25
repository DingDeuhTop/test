<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pic
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $img
 * @method static \Illuminate\Database\Eloquent\Builder|Pic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pic whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pic whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pic extends Model
{
    use HasFactory;
}
