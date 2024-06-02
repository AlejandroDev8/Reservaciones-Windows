<?php

namespace App\Livewire;

use App\Models\Sala;
use App\Models\Acomodo;
use Livewire\Component;
use App\Models\Reservation;
use Illuminate\Support\Carbon;
use App\Notifications\SolicitudRechazada;

class RechazarSolicitud extends Component
{
    public $reservacion_id;
    public $email;
    public $sala;
    public $fecha_inicio;
    public $fecha_fin;
    public $acomodo;
    public $extras;
    public $respuesta;

    public function mount(Reservation $reservacion)
    {
        $this->reservacion_id = $reservacion->id;
        $this->email = $reservacion->email;
        $this->sala = $reservacion->sala_id;
        $this->fecha_inicio = Carbon::parse($reservacion->fecha)->format('Y-m-d');
        $this->fecha_fin = Carbon::parse($reservacion->fecha_fin)->format('Y-m-d');
        $this->acomodo = $reservacion->acomodo_id;
        $this->extras = $reservacion->extras;
    }

    public function rechazarSolicitud($id)
    {
        $solicitud = Reservation::find($id);
        $solicitud->estado_id = 3;
        $solicitud->respuesta = $this->respuesta;
        $solicitud->save();

        // Enviar notificación al usuario

        if ($solicitud->user) {
            $solicitud->user->notify(new SolicitudRechazada($solicitud));
        }

        // crear un mensaje flash

        session()->flash('message', 'La solicitud ha sido rechazada');

        // Redireccionar a la página de inicio

        return redirect()->route('reservations.index');
    }

    public function render(Reservation $reservacion)
    {
        $minDate = date('2024-01-01');
        $maxDate = date('2024-12-31');

        $reservacion = Reservation::find($this->reservacion_id);

        $salas = Sala::all();
        $acomodos = Acomodo::all();

        return view('livewire.rechazar-solicitud', [
            'reservacion' => $reservacion,
            'salas' => $salas,
            'acomodos' => $acomodos,
            'minDate' => $minDate,
            'maxDate' => $maxDate
        ]);
    }
}
