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
        Schema::create('sheep', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50);
            $table->boolean('sex'); // 1: jantan, 0: betina
            $table->enum('status', ['sehat', 'mati', 'sakit', 'bunting'])->default('sehat');
            $table->decimal('weight', 5, 2)->default(0);
            $table->date('date_of_entry');
            $table->unsignedBigInteger('farm_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheep');
    }
};
