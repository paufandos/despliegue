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
        Schema::create('services_resources', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Comida', 'Ropa', 'Higiene Femenina', 'Higiene Masculina', 'Juguetes', 'Médico', 'Clase']);
            $table->string('ong');
            $table->double('cost');
            $table->date('date');
            $table->string('refugees_camp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_resources');
    }
};
