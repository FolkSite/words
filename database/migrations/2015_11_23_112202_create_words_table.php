<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('words', function (Blueprint $table) {
      $table->increments('id');
      $table->string('word', 100);
      $table->integer('poll_id')->unsigned()->default(0);
      $table->foreign('poll_id')->references('id')->on('polls')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('words');
  }

}
