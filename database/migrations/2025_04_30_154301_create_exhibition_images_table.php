<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionImagesTable extends Migration
{
    public function up()
    {
        Schema::create('exhibition_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exhibition_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('exhibition_images');

    }
}