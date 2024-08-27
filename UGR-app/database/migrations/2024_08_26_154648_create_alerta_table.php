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
        Schema::create('alerta', function (Blueprint $table) {
            $table->integer('idAlerta');
            //$table->foreignId('idEvento')->constrained()->cascadaOnDelete();
            $table->string('mensaje');
            $table->string('nivel');
            $table->date('fecha');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerta');
    }
};
