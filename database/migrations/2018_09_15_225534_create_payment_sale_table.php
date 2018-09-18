<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_sale', function (Blueprint $table) {
            $table->unsignedTinyInteger('payment_id');
            $table->unsignedBigInteger('sale_id');
            $table->bigInteger('value');

            $table->primary(['payment_id', 'sale_id']);

            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('sale_id')->references('id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_sale', function (Blueprint $table) {
			$table->dropForeign(['payment_id']);
			$table->dropForeign(['sale_id']);
		});

        Schema::dropIfExists('payment_sale');
    }
}
