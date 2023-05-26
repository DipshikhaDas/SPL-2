<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountCreatedNotification extends Notification
{
    use Queueable;

    protected $role;
    protected $email;
    protected $password;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $role, string $email, string $password)
    {
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
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
        $roles = implode(', ', $this->role);
        return (new MailMessage)
                    ->subject('Account Created')
                    ->greeting('Hello!')
                    ->line('An account has been created for you in the Dhaka University Journal Publications with the following details:')
                    ->line('Email: '. $this->email)
                    ->line('Password: '. $this->password)
                    ->line('Assigned Roles:'. $roles)
                    ->action('url', url('/'))
                    ->line('Please change your password after logging in for the first time.')
                    ->line('If you have any questions, feel free to contact with us.')
                    ->salutation('Thank you for using our application!');
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
