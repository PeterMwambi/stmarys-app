<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('theme_images', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('theme_id');
                $table->string('image_link');
                $table->unsignedTinyInteger('sort_order')->default(0);
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('theme_id')
                      ->references('id')->on('theme')
                      ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('theme_images');
    }
};
