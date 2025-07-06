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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('bgimg')->nullable();
            $table->string('img')->nullable();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('wave')->nullable();
            $table->string('project')->nullable();
            $table->string('cleaner')->nullable();
            $table->string('customer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
