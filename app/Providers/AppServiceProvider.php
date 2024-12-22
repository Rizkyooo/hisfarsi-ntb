<?php

namespace App\Providers;

use App\Filament\Pages\Dashboard;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        Filament::registerPages([
            Dashboard::class,
        ]);

        if (config('app.env') != 'local') {
            URL::forceScheme('https');
        }
    }
}
