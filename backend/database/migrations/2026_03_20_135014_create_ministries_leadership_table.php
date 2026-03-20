<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ministries_leadership', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('firstname', 50);
                $table->string('lastname', 50);
                $table->unsignedInteger('ministry_id');
                $table->string('role', 50);
                $table->string('welcome_message_title')->nullable();
                $table->string('welcome_message', 500)->nullable();
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('ministry_id')
                      ->references('id')->on('ministries')
                      ->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ministries_leadership');
    }
};
