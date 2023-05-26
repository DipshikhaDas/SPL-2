<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendEmailNotification extends Notification
{
    use Queueable;

    public $emailData;

    /**
     * Create a new notification instance.
     */
    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        // $emailData = $this->emailData;
        // $loginUrl = $emailData['loginUrl'];
        // $email = $emailData['email'];
        // $password = $emailData['password'];
        // $roles = $emailData['roles'];

        // return (new MailMessage)
        //             ->subject('Your new account has been created')
        //             ->greeting('Hello!')
        //             ->line('Your new account has been created. Here are your login credentials:')
        //             ->line('Email: '.$email)
        //             ->line('Password: '.$password)
        //             ->line('Assigned Roles: ' .implode(', ',$roles ))
        //             ->action('Login', $loginUrl)
        //             ->line('Please change your password after logging in for the first time.');

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
