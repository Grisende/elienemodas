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
        Schema::create('debits', function (Blueprint $table) {
            $table->increments('debit_id');
            $table->integer('client_id', false, true);
            $table->decimal('debit_value');
            $table->tinyInteger('debit_installments', false, true);
            $table->dateTime('updated_at')->default((new DateTime('now'))->format('Y-m-d H:i:s'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debits');
    }
};
