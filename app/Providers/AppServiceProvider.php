<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Auth\AuthRepository;
use App\Repositories\Auth\AuthRepositoryInterface;
use App\Services\Auth\AuthService;
use App\Services\Auth\AuthServiceInterface;
use App\Repositories\Seat\SeatRepository;
use App\Repositories\Seat\SeatRepositoryInterface;
use App\Services\Seat\SeatService;
use App\Services\Seat\SeatServiceInterface;
use App\Repositories\Booking\BookingRepository;
use App\Repositories\Booking\BookingRepositoryInterface;
use App\Services\Booking\BookingService;
use App\Services\Booking\BookingServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /** Auth Binding */
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);

        /** Seat Binding */
        $this->app->bind(SeatServiceInterface::class, SeatService::class);
        $this->app->bind(SeatRepositoryInterface::class, SeatRepository::class);

        /** Booking Binding */
        $this->app->bind(BookingServiceInterface::class, BookingService::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
    }
}
