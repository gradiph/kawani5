<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedBigInteger('sale_detail_id')->nullable()->default(NULL);
            $table->tinyInteger('type');
            $table->float('value', 9, 2);
            $table->dateTime('created_at');
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::table('discounts', function (Blueprint $table) {
			$table->dropForeign(['user_id']);
			$table->dropForeign(['sale_detail_id']);
		});

        Schema::dropIfExists('discounts');
    }
}
