<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chose_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
            $table->string('image')->nullable();
            $table->string('f_image')->nullable();
            $table->string('f_title')->nullable();
            $table->text('f_msg')->nullable();
            $table->string('f_1_image')->nullable();
            $table->string('f_1_title')->nullable();
            $table->text('f_1_msg')->nullable();
            $table->string('f_2_image')->nullable();
            $table->string('f_2_title')->nullable();
            $table->text('f_2_msg')->nullable();
            $table->string('f_3_image')->nullable();
            $table->string('f_3_title')->nullable();
            $table->text('f_3_msg')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chose_us');
    }
};