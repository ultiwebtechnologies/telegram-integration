<?php

namespace Ultiwebtechnologies\TelegramIntegration;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected $botToken;
    protected $defaultChatId;

    public function __construct()
    {
        $this->botToken = config('telegram.bot_token');
        $this->defaultChatId = config('telegram.chat_id');
    }

    public function sendMessage(string $message, ?string $chatId = null)
    {
        $chatId = $chatId ?? $this->defaultChatId;

        return Http::post("https://api.telegram.org/bot{$this->botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ])->json();
    }
}
