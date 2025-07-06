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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->mediumText('slogan')->nullable();
            $table->mediumText('map')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('hour')->nullable();
            $table->string('email')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('insta')->nullable();
            $table->string('youtube')->nullable();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
