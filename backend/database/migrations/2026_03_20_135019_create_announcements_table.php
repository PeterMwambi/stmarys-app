<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('announcements', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->string('title');
                $table->time('start_time');
                $table->time('end_time')->nullable();
                $table->date('start_date');
                $table->date('end_date')->nullable();
                $table->boolean('is_event')->default(false);
                $table->string('venue', 100)->nullable();
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
