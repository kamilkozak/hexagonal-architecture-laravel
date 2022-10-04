<?php

namespace Src\Customer\Domain\Listeners;

use Src\Booking\Domain\Contracts\Events\BookingCreated;

class GrantDiscountToCustomerListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param BookingCreated $event
     * @return void
     */
    public function handle(BookingCreated $event)
    {
        // grant a discount to the customer
    }
}
