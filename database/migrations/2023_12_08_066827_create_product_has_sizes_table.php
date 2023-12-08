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
        Schema::create('product_has_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pro_id'); // Foreign key column
            $table->foreign('pro_id')->references('id')->on('products');
            $table->unsignedBigInteger('size_id'); // Foreign key column
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_has_sizes');
    }
};
