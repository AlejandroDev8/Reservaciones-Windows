<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Solicitud extends Notification
{
    use Queueable;

    protected $solicitud;

    /**
     * Create a new notification instance.
     */
    public function __construct(Reservation $solicitud)
    {
        $this->solicitud = $solicitud;
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
            ->subject('Tu solicitud ha sido aceptada')
            ->line('¡Hola ' . $notifiable->name . '!')
            ->line('Tu solicitud para reservar una sala ha sido aceptada.')
            ->line('Detalles de la solicitud:')
            ->line('Número de folio: ' . $this->solicitud->id)
            ->line('Sala solicitada: ' . ($this->solicitud->sala ? $this->solicitud->sala->salas : 'Sin sala asociada'))
            ->line('Acomodo de sillas: ' . ($this->solicitud->acomodo->acomodo))
            ->line('Detalles extras: ' . $this->solicitud->extras)
            ->line('Fecha de inicio: ' . ($this->solicitud->fecha_inicio ? \DateTime::createFromFormat('Y-m-d', $this->solicitud->fecha_inicio)->format('d/m/Y') : 'Sin fecha de inicio'))
            ->line('Fecha de fin: ' . ($this->solicitud->fecha_fin ? \DateTime::createFromFormat('Y-m-d', $this->solicitud->fecha_fin)->format('d/m/Y') : 'Sin fecha de fin'))
            ->line('Motivo de Aceptación: ' . $this->solicitud->respuesta)
            ->line('Estado de la solicitud: Aceptada');
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
