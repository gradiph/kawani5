<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_returns', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedBigInteger('stock_id');
            $table->dateTime('created_at');
            $table->smallInteger('qty');
            $table->string('description');

            $table->foreign('stock_id')->references('id')->on('stocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier_returns', function (Blueprint $table) {
			$table->dropForeign(['stock_id']);
		});

        Schema::dropIfExists('supplier_returns');
    }
}
