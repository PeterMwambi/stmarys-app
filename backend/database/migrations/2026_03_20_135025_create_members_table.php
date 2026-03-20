<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('firstname', 20);
                $table->string('lastname', 20);
                $table->string('phone_number', 20)->unique();
                $table->string('email', 50)->unique();
                $table->enum('status', ['married','single','divorced','widow','widower']);
                $table->enum('baptized', ['yes','no']);
                $table->enum('confirmed', ['yes','no']);
                $table->string('image_link');
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
