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
        Schema::create('sheep_cares', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->nullable();
            $table->unsignedBigInteger('sheep_id')->nullable();
            $table->foreign('sheep_id')->references('id')->on('sheep')->nullOnDelete();
            $table->unsignedBigInteger('care_id');
            $table->foreign('care_id')->references('id')->on('cares')->restrictOnDelete();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheep_cares');
    }
};
