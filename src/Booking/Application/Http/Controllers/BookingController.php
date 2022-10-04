<?php

namespace Src\Booking\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Src\Booking\Application\Http\Requests\StoreBookingRequest;
use Src\Booking\Application\Http\Resources\BookingResource;
use Src\Booking\Domain\Contracts\BookingService;
use Src\Booking\Domain\Models\Booking;

class BookingController extends Controller
{
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(StoreBookingRequest $request, BookingService $bookingService): BookingResource
    {
        $this->authorize('create', Booking::class);

        $booking = $bookingService->storeBooking($request->validated());

        return new BookingResource($booking);
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Booking $booking): BookingResource
    {
        $this->authorize('view', $booking);

        return new BookingResource($booking);
    }
}
