<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockOpnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_opnames', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedTinyInteger('store_id');
            $table->string('description', 100)->nullable()->default(NULL);
            $table->dateTime('started_at');
            $table->dateTime('finished_at')->nullable()->default(NULL);
            $table->tinyInteger('can_edit')->default(0);

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
        Schema::table('stock_opnames', function (Blueprint $table) {
			$table->dropForeign(['store_id']);
		});

        Schema::dropIfExists('stock_opnames');
    }
}
