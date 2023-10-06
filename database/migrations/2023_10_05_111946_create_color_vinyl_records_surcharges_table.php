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
        Schema::create('color_vinyl_records_surcharges', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->enum('disc_size', ['7', '10', '12'])->nullable();
            $table->decimal('price', 10, 3)->nullable();
            $table->boolean('isFixedPrice')->default(false);
            $table->decimal('fixed_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_vinyl_records_surcharges');
    }
};
