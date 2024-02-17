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
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('entry_id');
            $table->integer('client_id', false, true);
            $table->decimal('entry_value');
            $table->tinyInteger('entry_payment_type', false, true);
            $table->dateTime('entry_payment_date')->default((new DateTime('now'))->format('Y-m-d H:i:s'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
