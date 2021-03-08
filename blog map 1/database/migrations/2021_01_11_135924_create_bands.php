<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('imgname');
            $table->string('admins');
            $table->string('band_leden');
            $table->string('band_omschrijving', 2000);
            $table->string('band_achtergrond_kleur');
            $table->string('band_letter_kleur');
            $table->string('youtube_video1');
            $table->string('youtube_video2');
            $table->string('youtube_video3');
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
        Schema::dropIfExists('bands');
    }
}
