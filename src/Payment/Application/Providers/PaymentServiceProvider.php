<?php

namespace Src\Payment\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Payment\Domain\Contracts\PaymentRepository as PaymentRepositoryContract;
use Src\Payment\Domain\Contracts\PaymentService as PaymentServiceContract;
use Src\Payment\Domain\Services\StripePaymentService;
use Src\Payment\Infrastructure\Repositories\PaymentRepository;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        PaymentServiceContract::class => StripePaymentService::class,
        PaymentRepositoryContract::class => PaymentRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../../Infrastructure/Database/Migrations');
    }
}
