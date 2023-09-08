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
        Schema::table('videogames', function (Blueprint $table) {
            $table->unsignedBigInteger('publisher_id')->after('id')->nullable()->constrained()->onDeleteNull()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //NO DOWN ON NULLABLE 
    }
};
