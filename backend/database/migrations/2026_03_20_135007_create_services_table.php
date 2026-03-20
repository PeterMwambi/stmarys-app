<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('header_image');
                $table->enum('day', ['MON','TUE','WED','THUR','FRI','SAT','SUN']);
                $table->time('start_time');
                $table->time('end_time');
                $table->string('venue', 100);
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
