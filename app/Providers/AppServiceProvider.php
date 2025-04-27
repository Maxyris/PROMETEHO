<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
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
        //
        ResetPasswordNotification::$toMailCallback = function ($notifiable, $token) {
            $url = url(route('password.reset', ['token' => $token], false));
    
            return (new MailMessage)
                ->subject('Restablecimiento de contraseña')
                ->greeting('¡Hola!')
                ->line('Estás recibiendo este correo porque recibimos una solicitud de restablecimiento de contraseña para tu cuenta.')
                ->action('Restablecer contraseña', $url)
                ->line('Si no solicitaste un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.')
                ->salutation('Muchas gracias, ' . config('app.name'). '.');
        };
    }
}
