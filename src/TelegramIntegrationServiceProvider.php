<?php

namespace Ultiwebtechnologies\TelegramIntegration;

use Illuminate\Support\ServiceProvider;

class TelegramIntegrationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {
        // Register Telegram bindings or services here
    }
}
