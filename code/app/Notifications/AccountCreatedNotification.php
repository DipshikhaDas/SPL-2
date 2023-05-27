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
    protected $user_name;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $role, string $email, string $password, $user_name)
    {
        $this->role = $role;
        $this->email = $email;
        $this->password = $password;
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
        $roles = implode(', ', $this->role);

        return (new MailMessage)
                    ->subject('Account Created')
                    ->greeting('Dear, '. $this->user_name)
                    ->line('An account has been created for you in the Dhaka University Journal Publications with the following details:')
                    ->line('Email: '. $this->email)
                    ->line('Password: '. $this->password)
                    ->line('Assigned Roles:'. $roles)
                    ->line('Login to your account:')
                    ->action('login', route('login'))
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
