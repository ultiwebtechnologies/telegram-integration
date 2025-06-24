<?php

namespace Ultiwebtechnologies\TelegramIntegration;

use Illuminate\Support\ServiceProvider;

class TelegramIntegrationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->publishes([
            __DIR__ . '/../config/telegram.php' => config_path('telegram.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/telegram.php', 'telegram');

        $this->app->singleton(TelegramService::class, function () {
            return new TelegramService();
        });
    }
}
