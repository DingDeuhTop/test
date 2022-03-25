<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Trust
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Trust newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trust newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trust query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trust whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trust whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trust whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trust whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Trust extends Model
{
    use HasFactory;
}
