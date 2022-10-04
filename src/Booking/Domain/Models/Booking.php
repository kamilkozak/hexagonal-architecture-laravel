<?php

namespace Src\Booking\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Booking\Infrastructure\Database\Factories\BookingFactory;

/**
 * Src\Booking\Domain\Models\Booking
 *
 * @property int $id
 * @property int $customer_id
 * @property int $room_id
 * @property string $check_in
 * @property string $check_out
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Src\Booking\Infrastructure\Database\Factories\BookingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCheckIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCheckOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Booking extends Model
{
    use HasFactory;

    protected static function newFactory(): BookingFactory
    {
        return BookingFactory::new();
    }
}
