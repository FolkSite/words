<?php

use Illuminate\Database\Seeder;

class PollsTableSeeder extends Seeder {

  public function run() {
    // Uncomment the below to wipe the table clean before populating
    DB::table('polls')->delete();

    $polls = array(
      ['id' => 1, 'name' => 'Саратов', 'description' => 'Тестовый опрос про Саратов', 'created_at' => new DateTime, 'updated_at' => new DateTime],
    );

    // Uncomment the below to run the seeder
    DB::table('polls')->insert($polls);
  }

}