<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Bio');
            $table->string('Date');
            $table->string('Venue');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exhibitions');
    }
};