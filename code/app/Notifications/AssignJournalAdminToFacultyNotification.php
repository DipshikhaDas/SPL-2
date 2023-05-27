<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AssignJournalAdminToFacultyNotification extends Notification
{
    use Queueable;

    protected $faculty_name;
    protected $journal_admin_name;
    /**
     * Create a new notification instance.
     */
    public function __construct($faculty_name, $journal_admin_name)
    {
        $this->faculty_name = $faculty_name;
        $this->journal_admin_name = $journal_admin_name;
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
        ->greeting('Dear,' .$this->journal_admin_name)
        ->line('You have been assigned as a journal admin for the faculty: '.$this->faculty_name)
        ->action('Go to Dashboard', route('login'))
        ->line('Thank you for using our application!');
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
