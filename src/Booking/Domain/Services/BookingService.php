<?php

namespace Src\Booking\Domain\Services;

use Illuminate\Support\Facades\DB;
use Src\Booking\Domain\Contracts\BookingRepository;
use Src\Booking\Domain\Contracts\BookingService as BookingServiceContract;
use Src\Booking\Domain\Contracts\Events\BookingCreated;
use Src\Booking\Domain\Models\Booking;
use Src\Payment\Domain\Services\StripePaymentService;
use Src\Room\Domain\Contracts\RoomService;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;


class BookingService implements BookingServiceContract
{
    public function __construct(
        private BookingRepository    $bookingRepository,
        private RoomService          $roomService,
        private StripePaymentService $paymentService,
    )
    {
    }

    /**
     * @throws \Throwable
     */
    public function storeBooking(array $data): Booking
    {
        DB::beginTransaction();

        try {
            $room = $this->roomService->getRoomById($data['room_id']);

            $booking = $this->bookingRepository->createBooking($data);

            $this->paymentService->charge($booking->getKey(), $room->price);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw new UnprocessableEntityHttpException(__('booking::errors.failed'));
        }

        event(new BookingCreated($booking->getKey()));

        return $booking;
    }
}
