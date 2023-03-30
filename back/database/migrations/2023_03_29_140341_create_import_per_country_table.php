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
        Schema::create('import_per_countries', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('service_resource');
            $table->double('cost');
            $table->integer('service_resource_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('import_per_country');
    }
};
