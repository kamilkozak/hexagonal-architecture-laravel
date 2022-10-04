<?php

namespace Src\Room\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Room\Domain\Contracts\RoomRepository as RoomRepositoryContract;
use Src\Room\Domain\Contracts\RoomService as RoomServiceContract;
use Src\Room\Domain\Services\RoomService;
use Src\Room\Infrastructure\Repositories\RoomRepository;

class RoomServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        RoomRepositoryContract::class => RoomRepository::class,
        RoomServiceContract::class => RoomService::class,
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
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../../Infrastructure/Database/Migrations');
    }
}
