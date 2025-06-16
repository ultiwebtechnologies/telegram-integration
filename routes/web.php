<?php

use Illuminate\Support\Facades\Route;

Route::get('/telegram-ping', function () {
    return 'Telegram package connected!';
});
