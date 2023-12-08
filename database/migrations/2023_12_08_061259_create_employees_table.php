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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_email','30');
            $table->string('emp_password','20');
            $table->string('emp_fname','30');
            $table->string('emp_lname','30');
            $table->char('emp_sex', 1);
            $table->string('emp_tel','10');
            $table->string('emp_address','255');
            $table->char('emp_status', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
