<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ministries_gallery', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('image_link');
                $table->unsignedInteger('ministry_id');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('ministry_id')
                      ->references('id')->on('ministries')
                      ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ministries_gallery');
    }
};
