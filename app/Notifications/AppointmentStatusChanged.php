<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentStatusChanged extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public $appointment)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Appointment Status Update')
                    ->greeting('Hello, ' . $notifiable->name)
                    ->line('Your appointment status has changed.')
                    ->line('Service: ' . $this->appointment->service->title)
                    ->line('New Status: ' . ucfirst($this->appointment->status))
                    ->action('Check Status', route('appointments.index'))
                    ->line('Thank you for choosing us!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'Your booking for ' . $this->appointment->service->title . ' has been ' . ucfirst($this->appointment->status),
            'appointment_id' => $this->appointment->id,
            'link' => route('appointments.index'),
        ];
    }
}
