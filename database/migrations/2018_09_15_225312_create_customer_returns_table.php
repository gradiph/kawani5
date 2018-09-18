<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_returns', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('sale_detail_id');
            $table->dateTime('created_at');
            $table->smallInteger('qty');
            $table->string('description');
            $table->tinyInteger('back_to_store');

            $table->foreign('stock_id')->references('id')->on('stocks');
            $table->foreign('sale_detail_id')->references('id')->on('sale_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_returns', function (Blueprint $table) {
			$table->dropForeign(['stock_id']);
			$table->dropForeign(['sale_detail_id']);
		});

        Schema::dropIfExists('customer_returns');
    }
}
