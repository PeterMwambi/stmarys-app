<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('theme_breakdown', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('theme_id');
                $table->unsignedInteger('quarter_id');
                $table->unsignedTinyInteger('month');
                $table->string('theme', 150);
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('theme_id')
                      ->references('id')->on('theme')
                      ->onDelete('restrict');
                $table->foreign('quarter_id')
                      ->references('id')->on('quarter')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('theme_breakdown');
    }
};
