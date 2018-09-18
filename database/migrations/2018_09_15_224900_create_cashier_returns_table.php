<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashierReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_returns', function (Blueprint $table) {
            $table->mediumincrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedBigInteger('stock_id');
            $table->dateTime('created_at');
            $table->smallInteger('qty');
            $table->string('description');

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('cashier_returns', function (Blueprint $table) {
			$table->dropForeign(['user_id']);
			$table->dropForeign(['stock_id']);
		});

        Schema::dropIfExists('cashier_returns');
    }
}
