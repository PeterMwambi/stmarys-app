<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carousel', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('title');
                $table->string('sub_title');
                $table->string('button_name', 100);
                $table->string('button_link');
                $table->string('image_link');
                $table->string('icon')->nullable();
                $table->boolean('has_icon')->default(false);
                $table->unsignedInteger('location_id');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('location_id')
                      ->references('id')->on('carousel_location')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carousel');
    }
};
