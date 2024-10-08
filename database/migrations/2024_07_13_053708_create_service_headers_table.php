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
        Schema::create('service_headers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('f')->nullable();
            $table->string('f_1')->nullable();
            $table->string('f_2')->nullable();
            $table->foreignId('service_id')->nullable()->constrained('services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_headers');
    }
};
