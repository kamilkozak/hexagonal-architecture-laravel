<?php

use Illuminate\Support\Facades\Route;
use Src\Booking\Application\Http\Controllers\BookingController;

Route::prefix('booking/api/v1')
    ->name('booking.api.v1.')
    ->middleware(['api', 'auth:sanctum'])
    ->group(function () {
        Route::apiResource('bookings', BookingController::class);
    });
