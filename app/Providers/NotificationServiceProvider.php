<?php

namespace App\Providers;

use App\Http\Controllers\NotifictionController;
use App\Interfaces\NotificationInterface;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(NotificationInterface::class, function ($app) {
            return new NotifictionController();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
