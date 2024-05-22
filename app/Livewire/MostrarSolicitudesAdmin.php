<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;

class MostrarSolicitudesAdmin extends Component
{
    public $sala;
    public $user;
    public $estado;

    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($sala, $user, $estado)
    {
        $this->sala = $sala;
        $this->user = $user;
        $this->estado = $estado;
    }

    public function render()
    {
        $solicitudes = Reservation::where('sala_id', 'like', '%' . $this->sala . '%')
            ->where('user_id', 'like', '%' . $this->user . '%')
            ->where('estado_id', 'like', '%' . $this->estado . '%')
            ->get();

        return view('livewire.mostrar-solicitudes-admin', [
            'solicitudes' => $solicitudes
        ]);
    }
}
