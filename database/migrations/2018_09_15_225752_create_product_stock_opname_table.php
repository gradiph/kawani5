<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStockOpnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stock_opname', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedMediumInteger('stock_opname_id');
            $table->smallInteger('qty');
            $table->bigInteger('price');
            $table->bigInteger('cost');
            $table->string('description')->nullable()->default(NULL);

            $table->primary(['product_id', 'stock_opname_id']);

            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::table('product_stock_opname', function (Blueprint $table) {
			$table->dropForeign(['product_id']);
			$table->dropForeign(['stock_opname_id']);
		});

        Schema::dropIfExists('product_stock_opname');
    }
}
