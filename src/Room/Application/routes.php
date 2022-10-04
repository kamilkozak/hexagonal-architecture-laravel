<?php

use Illuminate\Support\Facades\Route;
use Src\Room\Application\Http\Controllers\RoomController;

Route::prefix('room/api/v1')
    ->name('room.api.v1.')
    ->middleware(['api', 'auth:sanctum'])
    ->group(function () {
        Route::apiResource('rooms', RoomController::class);
    });
