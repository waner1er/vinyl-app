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
        Schema::create('surcharge_for_specials', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            $table->enum('disc_size', ['7', '10', '12'])->nullable();
            $table->decimal('100_199')->nullable();
            $table->decimal('200_249')->nullable();
            $table->decimal('250_499')->nullable();
            $table->decimal('500_999')->nullable();
            $table->decimal('1000_1999')->nullable();
            $table->decimal('2000_2999')->nullable();
            $table->decimal('3000_4999')->nullable();
            $table->decimal('5000_7499')->nullable();
            $table->decimal('7500_9999')->nullable();
            $table->decimal('10000_14999')->nullable();
            $table->decimal('15000_19999')->nullable();
            $table->decimal('20000_29999')->nullable();
            $table->decimal('30000_49999')->nullable();
            $table->decimal('50000_100000')->nullable();
            $table->boolean('isFixedPrice')->default(false);
            $table->decimal('fixed_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surcharge_for_specials');
    }
};
