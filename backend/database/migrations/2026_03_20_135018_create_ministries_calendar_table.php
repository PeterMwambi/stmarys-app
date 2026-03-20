<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ministries_calendar', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('ministry_id');
                $table->string('activity');
                $table->date('start_date');
                $table->date('end_date')->nullable();
                $table->string('venue', 100)->nullable();
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('ministry_id')
                      ->references('id')->on('ministries')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ministries_calendar');
    }
};
