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
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('id_participante');
            $table->string('nombre_participante',length:40);
            $table->string('apellido_paterno_participante',length:20)->nullable();
            $table->string('apellido_materno_participante',length:20)->nullable();
            $table->integer('edad_participante');
            $table->enum('rol_participante',['espectador','organizador','conferencista','ayudante'])->default('espectador');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id_evento')->on('eventos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
