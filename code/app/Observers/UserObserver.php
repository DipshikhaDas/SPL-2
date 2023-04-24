<?php

namespace App\Observers;

use App\Models\User;

use Illuminate\Support\Facades\Notification;

use App\Notifications\SendEmailNotification;
use App\Http\Controllers\Controller;
use App\Models\CreateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserAndRoleManagement\CreateUserController;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {

        if (auth()->check() && (auth()->user()->hasRole('journalAdmin')||auth()->user()->hasRole('superAdmin'))) {
            // Send the notification to the new user
            $temporaryPassword= Str::random(10);
            $user->password = Hash::make($temporaryPassword);
            $roles = $user->getRoleNames(); // Get the user's roles
            $roleNames = $roles->toArray();

            $user->save();

            // dd($roleNames);

            $emailData = [
                'email'=>$user->email,
                'password'=>$temporaryPassword,
                'roles'=>$roleNames,
                'loginUrl'=>'http://127.0.0.1:8000/login'
            ];
            $user->notify(new SendEmailNotification($emailData));
        }

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
