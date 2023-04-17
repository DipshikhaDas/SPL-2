<?php

namespace App\Observers;

use App\Models\User;

use Illuminate\Support\Facades\Notification;

use App\Notifications\SendEmailNotification;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $details=[
            'greeting'=>'Hi DU Journal Publication User',
            'body'=>'This is the email body',
            'actiontext'=>'Here is the website',
            'actionurl'=>'/',
            'lastline'=>'Thank you for joining with us'

        ];

        Notification::send($user, new SendEmailNotification($details));
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
