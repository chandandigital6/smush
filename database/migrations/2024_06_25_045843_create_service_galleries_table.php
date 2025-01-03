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
        Schema::create('service_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('msg')->nullable();
            $table->text('image')->nullable();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->enum('status',[1,0])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_galleries');
    }
};
