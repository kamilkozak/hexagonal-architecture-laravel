<?php

namespace Src\Customer\Application\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Src\Booking\Domain\Contracts\Events\BookingCreated;
use Src\Customer\Domain\Listeners\GrantDiscountToCustomerListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        BookingCreated::class => [
            GrantDiscountToCustomerListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
