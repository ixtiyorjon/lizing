<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('texnics_id');
            $table->string('viloyat');
            $table->string('tuman');
            $table->string('nomi');
            $table->string('date');
            $table->integer('number');
            $table->string('given');
            $table->string('sorting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_orders');
    }
}
