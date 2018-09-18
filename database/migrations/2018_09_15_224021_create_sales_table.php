<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedTinyInteger('store_id');
            $table->dateTime('created_at');
            $table->bigInteger('price_total');
            $table->bigInteger('cost_total');
            $table->bigInteger('discount_total');
            $table->smallInteger('qty_total');
            $table->bigInteger('money_paid');
            $table->tinyInteger('invoice_printed')->default(0);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
			$table->dropForeign(['user_id']);
			$table->dropForeign(['store_id']);
		});

        Schema::dropIfExists('sales');
    }
}
