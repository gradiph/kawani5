<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_requirement', function (Blueprint $table) {
            $table->unsignedInteger('promo_id');
            $table->unsignedBigInteger('stock_id');
            $table->tinyInteger('type');
            $table->float('value', 9, 2);
            $table->smallInteger('qty');

            $table->primary(['promo_id', 'stock_id']);

            $table->foreign('promo_id')->references('id')->on('promos');
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
        Schema::table('promo_requirement', function (Blueprint $table) {
			$table->dropForeign(['promo_id']);
			$table->dropForeign(['stock_id']);
		});

        Schema::dropIfExists('promo_requirement');
    }
}
