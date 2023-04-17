<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Notification;


use App\Notifications\SendEmailNotification;

class NotificationController extends Controller
{
    public function sendNotification(){
        $user = User::all();

        $details=[
            'greeting'=>'Hi DU Journal Publication User',
            'body'=>'This is the email body',
            'actiontext'=>'Here is the website',
            'actionurl'=>'/',
            'lastline'=>'Thank you for joining with us'

        ];

        Notification::send($user, new SendEmailNotification($details));

        dd('done');
    }
}
