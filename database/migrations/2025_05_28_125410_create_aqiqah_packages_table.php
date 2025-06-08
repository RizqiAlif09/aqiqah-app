<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aqiqah_packages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price', 12, 2);
            $table->decimal('cooking_cost', 12, 2);
            $table->integer('sate_quantity');
            $table->integer('gulai_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aqiqah_packages');
    }
};
