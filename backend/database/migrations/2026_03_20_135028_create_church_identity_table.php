<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('church_identity', function (Blueprint $table) {
    $table->unsignedInteger('id')->autoIncrement();
                $table->enum('type', ['vision','mission','value']);
                $table->string('title', 100);
                $table->text('body');
                $table->timestamps();
                $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('church_identity');
    }
};
