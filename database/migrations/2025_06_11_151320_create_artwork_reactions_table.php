<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworkReactionsTable extends Migration
{
    public function up()
    {
        Schema::create('artwork_reactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('artwork_id');
            $table->tinyInteger('reaction'); // 1 for like, -1 for dislike
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('artwork_id')->references('id')->on('artist_images')->onDelete('cascade');
            $table->unique(['user_id', 'artwork_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('artwork_reactions');
    }
}
