<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTexnicsSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texnics_subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $title->string('title');
            $title->string('image');
            $title->string('slug');
            $table->integer('texnics_categories_id')->unsigned();
            $table->foreign('texnics_categories_id')->references('id')->on('texnics_categories')->onDelete('cascade');
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
        Schema::dropIfExists('texnics_subcategories');
    }
}
