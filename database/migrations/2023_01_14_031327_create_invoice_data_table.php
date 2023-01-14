<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_kode');
            $table->String('invoice_id');
            $table->timestamps();

            $table->foreign('product_kode')->references('kode')->on('products')->onDelete('CASCADE');
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_data');
    }
};
