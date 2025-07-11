<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworkCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('artwork_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('artwork_id');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('artwork_id')->references('id')->on('artist_images')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('artwork_comments');
    }
}
