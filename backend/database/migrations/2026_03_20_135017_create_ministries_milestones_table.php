<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ministries_milestones', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('ministry_id');
                $table->string('title');
                $table->text('description')->nullable();
                $table->date('milestone_date')->nullable();
                $table->string('download_link');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('ministry_id')
                      ->references('id')->on('ministries')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ministries_milestones');
    }
};
