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
        Schema::create('requrimientos_eventos', function (Blueprint $table) {
            $table->increments('id_peticion');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')->references('id_evento')->on('eventos');
            $table->unsignedBigInteger('id_recurso');
            $table->foreign('id_recurso')->references('id_recurso')->on('recursos');
            $table->integer('cantidad_recurso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requrimientos_eventos');
    }
};
