<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('promo_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('sale_id');
            $table->bigInteger('price');
            $table->bigInteger('cost');
            $table->bigInteger('discount');
            $table->smallInteger('qty');

            $table->foreign('promo_id')->references('id')->on('promos');
            $table->foreign('stock_id')->references('id')->on('stocks');
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
        Schema::table('sale_details', function (Blueprint $table) {
			$table->dropForeign(['promo_id']);
			$table->dropForeign(['stock_id']);
			$table->dropForeign(['sale_id']);
		});

        Schema::dropIfExists('sale_details');
    }
}
