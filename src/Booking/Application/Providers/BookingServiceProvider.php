<?php

namespace Src\Booking\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Booking\Domain\Contracts\BookingRepository as BookingRepositoryContract;
use Src\Booking\Domain\Contracts\BookingService as BookingServiceContract;
use Src\Booking\Domain\Services\BookingService;
use Src\Booking\Infrastructure\Repositories\BookingRepository;


class BookingServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        BookingRepositoryContract::class => BookingRepository::class,
        BookingServiceContract::class => BookingService::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);

        // $this->mergeConfigFrom(__DIR__.'/../../config/booking.php', 'booking');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../../Infrastructure/Database/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'booking');

        // $this->loadViewsFrom(__DIR__.'/../Resources/views', 'booking');

        // $this->loadViewComponentsAs('booking', [
        //     Alert::class,
        //     Button::class,
        // ]);
    }
}
