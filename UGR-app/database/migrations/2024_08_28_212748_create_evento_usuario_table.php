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
        Schema::create('evento_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('idEvento');
            $table->foreign('idEvento')->references('idEvento')->on('evento_adverso')->onDelete('cascade');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('idUsuario')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_usuario');
    }
};
