<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->enum('type', ['Kawani', 'Consina', 'Rei', 'Gudang'])->default('Kawani');
            $table->string('name', 50);
            $table->string('address', 100)->nullable()->default(NULL);
            $table->string('phone', 20)->nullable()->default(NULL);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
