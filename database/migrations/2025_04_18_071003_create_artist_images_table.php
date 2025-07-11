<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artist_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artist_id');
            $table->string('image_path');
            $table->text('comment')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('year')->nullable();
            $table->text('print')->nullable();
            $table->text('print_size')->nullable();
            $table->text('edition')->nullable();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artist_images');
    }
};
