<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ArticleSubmissionConfirmationCorrespondingAuthorNotification extends Notification
{
    use Queueable;
    protected $article;

    /**
     * Create a new notification instance.
     */
    public function __construct($article)
    {
        $this->article = $article;
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
            ->subject('Article Submission Confirmation')
            ->greeting('Dear ' . $notifiable->last_name . ',')
            ->line('Your article has been submitted successfully.')
            ->line('Title: ' . $this->article->title)
            ->line('Here is the submission link')
            ->action('Submission Url', route('home'))
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
