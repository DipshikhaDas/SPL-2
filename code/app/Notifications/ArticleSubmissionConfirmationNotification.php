<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ArticleSubmissionConfirmationNotification extends Notification
{
    use Queueable;

    protected $article;
    protected $submitted_by;

    /**
     * Create a new notification instance.
     */
    public function __construct($article, $submitted_by)
    {
        $this->article = $article;
        $this->submitted_by = $submitted_by;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Article Submission Confirmation')
            ->greeting('Dear ' . $notifiable->last_name .',')
            ->line('Your article has been submitted by '. $this->submitted_by)
            ->line('Title: ' . $this->article->title)
            ->line('Thank you for your submission!')
            ->salutation('Regards');
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
