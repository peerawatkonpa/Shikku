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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name','10');
            $table->float('pro_price', 7, 5);
            $table->mediumInteger('pro_amount');
            $table->text('pro_detail');
            $table->char('serial_number', 15);
            $table->unsignedBigInteger('brd_id');
            $table->foreign('brd_id')->references('id')->on('brands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
