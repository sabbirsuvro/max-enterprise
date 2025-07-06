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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->mediumText('video')->nullable();
            $table->string('year')->nullable();
            $table->longText('des')->nullable();
            $table->string('wptitle1')->nullable();
            $table->string('wptitle2')->nullable();
            $table->string('wptitle3')->nullable();
            $table->string('wptitle4')->nullable();
            $table->string('wpdes1')->nullable();
            $table->string('wpdes2')->nullable();
            $table->string('wpdes3')->nullable();
            $table->string('wpdes4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
