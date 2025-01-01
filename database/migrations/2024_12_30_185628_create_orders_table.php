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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('status');

            $table->foreignId('bill_id')->constrained()->references('id')->on('bills')->nullable();
            $table->foreignId('table_id')->constrained()->references('id')->on('tables')->nullable();
            $table->foreignId('room_id')->constrained()->references('id')->on('rooms')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
