<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('foods')->insert([
            [
              'name' => 'サムギョプサル',
              'genre' => 'korean',
              'main_dis' => 'meat',
            ],
            [
              'name' => 'チキン',
              'genre' => 'korean',
              'main_dis' => 'meat',
            ],
            [
              'name' => 'サムゲタン',
              'genre' => 'korean',
              'main_dis' => 'meat',
            ],
            [
              'name' => 'プルコギ',
              'genre' => 'korean',
              'main_dis' => 'meat',
            ],
          ]);

        

    }
}
