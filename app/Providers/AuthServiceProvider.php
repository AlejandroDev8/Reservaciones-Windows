<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verificar cuenta')
                ->line('Por favor, haga clic en el siguiente enlace para verificar su cuenta.')
                ->action('Verificar cuenta', $url)
                ->line('Si no creó una cuenta, no es necesario realizar ninguna acción.');
        });
    }
}
