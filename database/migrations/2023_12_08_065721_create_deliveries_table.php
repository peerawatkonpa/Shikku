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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('company_name','50');
            $table->string('parcel_code','30');
            $table->dateTime('del_date', $precision = 0);
            $table->char('del_status', 1);
            $table->timestamps();
            $table->unsignedBigInteger('pay_id'); // Foreign key column
            $table->foreign('pay_id')->references('id')->on('payments');
            $table->unsignedBigInteger('emp_id'); // Foreign key column
            $table->foreign('emp_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
