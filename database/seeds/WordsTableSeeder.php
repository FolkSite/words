<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder {

  public function run() {
    // Uncomment the below to wipe the table clean before populating
    DB::table('words')->delete();

    $words = array(
      ['id' => 1, 'poll_id' => 1, 'word' => 'Родина', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 2, 'poll_id' => 1, 'word' => 'дом', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 3, 'poll_id' => 1, 'word' => 'Волга', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 4, 'poll_id' => 1, 'word' => 'Волга', 'created_at' => new DateTime, 'updated_at' => new DateTime],
    );

    // Uncomment the below to run the seeder
    DB::table('words')->insert($words);
  }

}