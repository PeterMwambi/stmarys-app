<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hbc_fellowships', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('hbc_id');
                $table->date('date');
                $table->time('start_time');
                $table->time('end_time')->nullable();
                $table->unsignedInteger('hbc_member_id');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('hbc_id')
                      ->references('id')->on('hbcs')
                      ->onDelete('restrict');
                $table->foreign('hbc_member_id')
                      ->references('id')->on('hbc_members')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hbc_fellowships');
    }
};
