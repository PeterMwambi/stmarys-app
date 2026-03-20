<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quarter', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('name', 100);
                $table->unsignedTinyInteger('start_month');
                $table->unsignedTinyInteger('end_month');
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quarter');
    }
};
