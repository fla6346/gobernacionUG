<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provincia_region', function (Blueprint $table) {
            $table->id('idProvincia');
            $table->unsignedInteger('idRegion');
            $table->string('nombreProvincia');
            $table->timestamps();

            //$table->foreign('idRegion')->references('idRegion')->on('Region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincia_region');
    }
};
