<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->rol === 0) {
            // Si el usuario tiene rol 0, solo se muestran sus reservaciones
            $reservaciones = Reservation::where('user_id', $user->id)->get();
        } elseif ($user->rol === 1) {
            // Si el usuario tiene rol 1, se muestran todas las reservaciones
            $reservaciones = Reservation::all();
        } else {
            // Otros roles no tienen acceso a esta página
            abort(403, 'No tiene permiso para acceder a esta página.');
        }

        return view('reservaciones.index', compact('reservaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
