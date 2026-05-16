<?php

namespace App\Listeners;

use App\Events\PostPublished;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

class SendPostPublishedNotification implements ShouldQueue
{
    public int $tries = 3;
    public $backoff = [10, 20];
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
        Mail::to($event->user->email)->send(
            new WelcomeMail($event->user)
        );

    }
}
