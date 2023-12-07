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
        Schema::create('install_invoices', function (Blueprint $table) {
            $table->id();
            $table->text('info');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('finance_id');
            $table->decimal('install_cost');

            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('users');


            $table->foreign('finance_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('install_invoices');
    }
};