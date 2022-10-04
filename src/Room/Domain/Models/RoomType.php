<?php

namespace Src\Room\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Src\Room\Domain\Models\RoomType
 *
 * @property int $id
 * @property string $name
 * @property string $information
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RoomType extends Model
{
    use HasFactory;
}
