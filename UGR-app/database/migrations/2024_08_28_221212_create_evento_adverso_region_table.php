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
        Schema::create('evento_adverso_region', function (Blueprint $table) {
            $table->foreignId('idEvento');

            //$table->unsignedBigInteger('idMunicipio');
            $table->foreign('idEvento')->references('idEvento')->on('evento_adverso')->onDelete('cascade');


            $table->foreignId('idRegion');
            $table->foreign('idRegion')->references('idRegion')->on('region')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_adverso_region');
    }
};
