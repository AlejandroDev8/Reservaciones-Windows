<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'sala_id',
        'fecha_inicio',
        'fecha_fin',
        'acomodo_id',
        'extras',
        'user_id',
        'respuesta'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con la tabla Sala
    public function sala()
    {
        return $this->belongsTo(Sala::class, 'sala_id');
    }

    public function estados()
    {
        return $this->belongsTo(Estados::class, 'estado_id');
    }

    public function acomodo()
    {
        return $this->belongsTo(Acomodo::class, 'acomodo_id');
    }
}
