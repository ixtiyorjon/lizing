<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('treaties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('treaty_number');
            $table->string('treaty_name');
            $table->date('date');
            $table->date('date_end');
            $table->string('number');
            $table->string('price');
            $table->integer('inn_id')->unsigned();
            $table->foreign('inn_id')->references('id')->on('user_inns')->onDelete('cascade');
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
        Schema::dropIfExists('treaties');
    }
}
