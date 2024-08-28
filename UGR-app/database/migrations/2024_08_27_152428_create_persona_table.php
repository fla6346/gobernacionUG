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
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('idPersona');
            $table->integer('ci');
            $table->string('nombre');
            $table->string('apellidoPaterno', 50);
            $table->string('apellidoMaterno', 50);
            $table->date('fechaUpdate', 100);
            $table->integer('idUsuario')->constrained()->cascadaOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
