<?php

namespace Skiphog\OspanelMailer;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

class OspanelMailerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/config/ospanel-mailer.php', 'mail.mailers');

        Mail::extend('ospanel', static fn() => new OspanelMailerTransport());
    }
}
