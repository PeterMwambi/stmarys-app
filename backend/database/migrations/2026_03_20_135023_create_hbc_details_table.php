<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hbc_details', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('title');
                $table->string('tag_line');
                $table->text('about');
                $table->text('coverage_area');
                $table->unsignedInteger('hbc_id');
                $table->unsignedInteger('hbc_member_id')->nullable();
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('hbc_id')
                      ->references('id')->on('hbcs')
                      ->onDelete('restrict');
                $table->foreign('hbc_member_id')
                      ->references('id')->on('hbc_members')
                      ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hbc_details');
    }
};
