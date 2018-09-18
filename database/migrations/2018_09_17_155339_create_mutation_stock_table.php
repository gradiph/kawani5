<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutationStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutation_stock', function (Blueprint $table) {
            $table->unsignedInteger('mutation_id');
            $table->unsignedBigInteger('stock_id');
            $table->smallInteger('qty');
            $table->dateTime('packed_at');
            $table->dateTime('picked_at')->nullable()->default(NULL);
            $table->dateTime('delivered_at')->nullable()->default(NULL);

            $table->primary(['mutation_id', 'stock_id']);

            $table->foreign('mutation_id')->references('id')->on('mutations');
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
        Schema::table('mutation_stock', function (Blueprint $table) {
			$table->dropForeign(['mutation_id']);
			$table->dropForeign(['stock_id']);
		});

        Schema::dropIfExists('mutation_stock');
    }
}
