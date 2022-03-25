<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Nav
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Nav newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nav newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nav query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nav whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nav whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nav whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nav whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nav whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Nav extends Model
{
    use HasFactory;
}
