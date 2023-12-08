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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('pay_date');
            $table->char('pay_slip', 25);
            $table->string('mem_bank', '30');
            $table->dateTime('check_date', $precision = 0);
            $table->char('pay_status', 1);
            $table->unsignedBigInteger('bank_id'); // Foreign key column
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->unsignedBigInteger('order_id'); // Foreign key column
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('emp_id'); // Foreign key column
            $table->foreign('emp_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
