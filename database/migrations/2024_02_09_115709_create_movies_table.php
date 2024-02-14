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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('movie_title');
            $table->string('movie_slug');
            $table->string('movie_url');
            $table->string('movie_cover');
            $table->string('movie_duration');
            $table->longText('description');
            $table->string('country');
            $table->string('status')->default(0);
            $table->string('published')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
