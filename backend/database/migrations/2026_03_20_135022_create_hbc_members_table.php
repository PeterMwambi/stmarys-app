<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hbc_members', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('firstname', 20);
                $table->string('lastname', 20);
                $table->string('phone_number', 20)->nullable();
                $table->unsignedInteger('hbc_id')->nullable();
                $table->date('date_joined');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('hbc_id')
                      ->references('id')->on('hbcs')
                      ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hbc_members');
    }
};
