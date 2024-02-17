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
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sale_id');
            $table->integer('client_id', false, true);
            $table->decimal('sale_value');
            $table->decimal('sale_parcial_value');
            $table->tinyInteger('sale_payment_type', false, true);
            $table->dateTime('sale_date')->default((new DateTime('now'))->format('Y-m-d H:i:s'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
