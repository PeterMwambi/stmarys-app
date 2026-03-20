<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members_family', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->unsignedInteger('member_id');
                $table->enum('relationship', ['spouse','child']);
                $table->string('firstname', 20);
                $table->string('lastname', 20);
                $table->enum('baptized', ['yes','no']);
                $table->enum('confirmed', ['yes','no']);
                $table->string('image_link');
                $table->timestamps();
                $table->softDeletes();
    
                $table->foreign('member_id')
                      ->references('id')->on('members')
                      ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members_family');
    }
};
