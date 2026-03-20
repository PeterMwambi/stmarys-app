<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('announcement_details', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('announcement_id');
                $table->text('about');
                $table->longText('additional_information')->nullable();
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('announcement_id')
                      ->references('id')->on('announcements')
                      ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('announcement_details');
    }
};
