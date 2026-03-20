<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ministries_department', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('name', 100);
                $table->text('description');
                $table->string('thumbnail_image');
                $table->unsignedInteger('ministry_id');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('ministry_id')
                      ->references('id')->on('ministries')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ministries_department');
    }
};
