<?php

namespace Rockbuzz\LaraWppCloudApi;

use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;

class WhatsAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        Notification::resolved(static function (ChannelManager $service) {
            $service->extend('whatsapp', static function ($app) {
                return $app->make(WhatsAppChannel::class);
            });
        });
    }
}