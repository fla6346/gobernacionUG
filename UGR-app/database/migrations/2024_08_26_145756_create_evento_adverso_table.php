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
            $table->id('idEvento');
            $table->string('area');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('fecha_inicio');
            $table->string('fecha_finalizacion');
            $table->time('hora');
            $table->string('descripcion');
            $table->string('areaAfectada');
            $table->integer('idPunto')->constrained()->cascadaOnDelete();
            $table->integer('idAlerta')->constrained()->cascadaOnDelete();
            $table->integer('idResponsable')->constrained()->cascadaOnDelete();;
            $table->integer('idRegion')->constrained()->cascadaOnDelete();;
            
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
