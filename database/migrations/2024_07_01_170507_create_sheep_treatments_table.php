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
        Schema::create('sheep_treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('sheep_id')->nullable();
            $table->foreign('sheep_id')->references('id')->on('sheep')->nullOnDelete();
            $table->unsignedBigInteger('disease_id');
            $table->foreign('disease_id')->references('id')->on('diseases')->restrictOnDelete();
            $table->unsignedBigInteger('treatment_id');
            $table->foreign('treatment_id')->references('id')->on('treatments')->restrictOnDelete();
            $table->date('date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheep_treatments');
    }
};
