<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTexnicsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('texnics', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->integer('texnics_categories_id')->unsigned();
      $table->integer('texnics_subcategories_id')->unsigned();
      $table->foreign('texnics_categories_id')->references('id')->on('texnics_categories')->onDelete('cascade');
      $table->foreign('texnics_subcategories_id')->references('id')->on('texnics_subcategories')->onDelete('cascade');
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
    Schema::dropIfExists('texnics');    
  }
}
