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
        Schema::create('refugee_count_per_conflicts', function (Blueprint $table) {
            $table->id();
            $table->string('conflict');
            $table->string('refugee_conutry');
            $table->integer('refugee_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refugee_count_per_conflict');
    }
};
