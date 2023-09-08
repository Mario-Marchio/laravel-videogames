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
            $table->unsignedBigInteger('genre_id')->nullable()->after('publisher_id');
            $table->foreign('genre_id')->references('id')->on('genres')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videogames', function (Blueprint $table) {
            $table->dropForeign('videogames_genre_id_foreign');
            $table->dropColumn('genre_id');
        });
    }
};
