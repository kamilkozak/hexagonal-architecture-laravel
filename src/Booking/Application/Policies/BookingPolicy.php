<?php

namespace Src\Booking\Application\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Src\Booking\Domain\Models\Booking;


class BookingPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Booking $booking)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }
}
