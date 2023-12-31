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
        Schema::create('console_videogame', function (Blueprint $table) {
            $table->id();
            $table->foreignId('console_id')->constrained()->nullable()->onDelete('cascade');
            $table->foreignId('videogame_id')->constrained()->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('console_videogame');
    }
};
