<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('store_id');
            $table->unsignedmediumInteger('stock_opname_id')->nullable()->default(NULL);
            $table->smallInteger('qty');
            $table->bigInteger('price');
            $table->bigInteger('cost');
            $table->string('description')->nullable()->default(NULL);
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('stock_opname_id')->references('id')->on('stock_opnames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stocks', function (Blueprint $table) {
			$table->dropForeign(['product_id']);
			$table->dropForeign(['store_id']);
			$table->dropForeign(['stock_opname_id']);
		});

        Schema::dropIfExists('stocks');
    }
}
