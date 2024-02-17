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
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('bill_id');
            $table->tinyInteger('bill_account_type', false, true);
            $table->string('bill_bank_slip_code');
            $table->decimal('bill_value');
            $table->boolean('paid');
            $table->dateTime('due_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
