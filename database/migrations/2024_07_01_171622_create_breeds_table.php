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
        Schema::create('breeds', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->nullable();
            $table->unsignedBigInteger('male_sheep_id')->nullable();
            $table->foreign('male_sheep_id')->references('id')->on('sheep')->nullOnDelete();
            $table->unsignedBigInteger('female_sheep_id')->nullable();
            $table->foreign('female_sheep_id')->references('id')->on('sheep')->nullOnDelete();
            $table->date('mating_date');
            $table->date('estimated_birth_date');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
