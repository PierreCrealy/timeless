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
        Schema::create('dish_compositions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('dish_id')->constrained()->references('id')->on('dishes');
            $table->foreignId('ingredient_id')->constrained()->references('id')->on('ingredients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_compositions');
    }
};