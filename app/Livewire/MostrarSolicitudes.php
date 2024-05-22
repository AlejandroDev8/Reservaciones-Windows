<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class MostrarSolicitudes extends Component
{

    protected $listeners = ['eliminarSoliitud'];

    public function eliminarSolicitud(Reservation $reservacion)
    {
        $reservacion->delete();
    }

    public function render()
    {
        $solicitudes = Reservation::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-solicitudes', [
            'solicitudes' => $solicitudes
        ]);
    }
}
