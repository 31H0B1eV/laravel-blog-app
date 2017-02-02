<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeAgain extends Mailable
{ // use it by >> Mail::to($user = App\User::first())->send(new App\Mail\WelcomeAgain($user));
    // edit layout template after >> php artisan vendor:publish --tag=laravel-mail


    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome-again');
    }
}
