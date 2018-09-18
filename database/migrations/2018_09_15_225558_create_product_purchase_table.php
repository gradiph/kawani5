<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchase', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedInteger('purchase_id');
            $table->smallInteger('qty');
            $table->bigInteger('price');
            $table->bigInteger('cost');
            $table->string('description')->nullable()->default(NULL);

            $table->primary(['product_id', 'purchase_id']);

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('purchase_id')->references('id')->on('purchases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_purchase', function (Blueprint $table) {
			$table->dropForeign(['product_id']);
			$table->dropForeign(['purchase_id']);
		});

        Schema::dropIfExists('product_purchase');
    }
}
