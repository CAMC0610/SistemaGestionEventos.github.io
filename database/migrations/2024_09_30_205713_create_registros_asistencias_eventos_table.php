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
        Schema::create('registros_asistencias_eventos', function (Blueprint $table) {
            $table->increments('id_registro_asistencia_evento');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id_evento')->on('eventos');
            $table->unsignedBigInteger('id_participante');
            $table->foreign('id_participante')->references('id_participante')->on('participantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros_asistencias_eventos');
    }
};
