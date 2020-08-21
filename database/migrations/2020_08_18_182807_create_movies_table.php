<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_title');
            $table->unsignedBigInteger('category_id');
            $table->string('language');
            $table->string('lead_actor');
            $table->time('time');
            $table->string('film_direction');
            $table->date('premiere');
            $table->string('url', 250);
            $table->string('url_portada', 250);
            $table->string('screenwriter');
            $table->string('music_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
