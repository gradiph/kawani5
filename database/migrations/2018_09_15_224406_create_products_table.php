<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('supplier_id');
            $table->unsignedTinyInteger('category_id');
            $table->unsignedTinyInteger('size_id');
            $table->unsignedTinyInteger('color_id');
            $table->string('code', 12)->unique();
            $table->string('name', 100);
            $table->softDeletes();

            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->foreign('color_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
			$table->dropForeign(['supplier_id']);
			$table->dropForeign(['category_id']);
			$table->dropForeign(['size_id']);
			$table->dropForeign(['color_id']);
		});

        Schema::dropIfExists('products');
    }
}
