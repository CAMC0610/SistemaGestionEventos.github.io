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
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id_evento');
            $table->string('nombre_evento',length:100)->unique();
            $table->date('fecha_de_evento');
            $table->time('hora_inicio_evento')->nullable();
            $table->time('hora_finalizacion_evento')->nullable();
            $table->string('ubicaion_evento',length:200);
            $table->enum('tipo_evento',['academico','recreativo','deportivo','otro'])->default('academico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
