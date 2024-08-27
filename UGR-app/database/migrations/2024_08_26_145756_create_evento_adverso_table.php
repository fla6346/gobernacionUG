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
        Schema::create('evento_adverso', function (Blueprint $table) {
            $table->integer('idEvento');
            $table->string('area');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('fecha_inicio');
            $table->string('fecha_finalizacion');
            $table->time('hora');
            $table->string('descripcion');
            $table->string('areaAfectada');
            $table->integer('idPunto');
            $table->integer('idAlerta');
            $table->integer('idResponsable');
            $table->integer('idRegion');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_adverso');
    }
};
