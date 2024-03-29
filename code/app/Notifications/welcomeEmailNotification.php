<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class welcomeEmailNotification extends Notification
{
    use Queueable;

    protected $user_name;

    /**
     * Create a new notification instance.
     */
    public function __construct($user_name)
    {
        $this->user_name = $user_name;
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
        return (new MailMessage)
                    ->greeting('Dear, '. $this->user_name)
                    ->line('Welcome to Dhaka University Journal Publications.')
                    ->line(' The goal of this journal system is to increase the visibility to the participating journals, use and impact of the university research publications by offering them to use through the university own online journal system.')
                    ->line('Our website link: ')
                    ->action('Our website', route('home'))
                    ->line('Thank you for using our website!');
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
