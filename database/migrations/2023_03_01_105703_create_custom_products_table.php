<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('custom_products', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->integer('price');
      $table->string('ball1');
      $table->string('ball2');
      $table->string('ball3');
      $table->string('wafer');
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
    Schema::dropIfExists('custom_products');
  }
};
