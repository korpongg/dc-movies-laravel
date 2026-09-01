<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('movie_characters', function (Blueprint $table) {
    $table->id();

    $table->foreignId('movie_id')
        ->constrained('dc_movies')
        ->onDelete('cascade');

    $table->foreignId('character_id')
        ->constrained('dc_characters')
        ->onDelete('cascade');

    $table->timestamps();

    $table->unique(['movie_id', 'character_id']);
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_characters');
    }
};
