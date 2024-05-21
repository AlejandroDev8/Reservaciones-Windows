<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('email');
            $table->foreignId('sala_id')->constrained()->onDelete('cascade');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreignId('acomodo_id')->constrained()->onDelete('cascade');
            $table->text('extras')->nullable();
            $table->foreignId('estado_id')->default(1)->constrained()->onDelete('cascade'); // 1 = pendiente, 2 = aceptado, 3 = rechazado
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('respuesta')->nullable();

            // Crear un índice único compuesto sin incluir el campo 'id'
            $table->unique(['sala_id', 'fecha_inicio', 'fecha_fin'], 'idx_unique_reservation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(['sala_id']);
            $table->dropForeign(['acomodo_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['estado_id']);
            $table->dropColumn(['email', 'sala_id', 'fecha_inicio', 'fecha_fin', 'acomodo_id', 'extras', 'estado_id', 'user_id']);
        });
    }
};
