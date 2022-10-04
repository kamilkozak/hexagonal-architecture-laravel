<?php

namespace Src\Room\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Src\Room\Infrastructure\Database\Factories\RoomFactory;

/**
 * Src\Room\Domain\Models\Room
 *
 * @property int $id
 * @property int $room_type_id
 * @property int $active
 * @property string $number
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Src\Room\Infrastructure\Database\Factories\RoomFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereRoomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Src\Room\Domain\Models\RoomType $roomType
 */
class Room extends Model
{
    use HasFactory;

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    protected static function newFactory(): RoomFactory
    {
        return RoomFactory::new();
    }
}
