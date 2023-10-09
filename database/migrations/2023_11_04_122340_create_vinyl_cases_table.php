<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vinyl_cases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('size', ['7', '10', '12'])->default('10');
            $table->boolean('is_double')->default(false);
            $table->enum('quantity', ['100_199', '200_249', '250_499', '500_999', '1000_1999', '2000_2999', '3000_4999', '5000_7499', '10000_14999', '15000_19999', '20000_29999', '30000_49999', '50000_100000'])->default('500_999');
            $table->string('cutting_price');
            $table->enum('disc_color_type', ['black', 'colored', 'picture_disc'])->default('black');
            $table->string('print_label_price');
            $table->string('test_pressing_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinyl_cases');
    }
};
