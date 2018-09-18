<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_queries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('created_at');
            $table->text('query');
            $table->dateTime('uploaded_at')->nullable()->default(NULL);
            $table->bigInteger('user_logable_id')->unsigned()->nullable()->default(NULL);
            $table->string('user_logable_type', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_queries');
    }
}
