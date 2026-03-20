<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carousel_location', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('location', 100)->unique();
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carousel_location');
    }
};
