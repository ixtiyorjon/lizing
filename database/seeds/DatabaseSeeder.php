<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
          LinkTableSeeder::class
        ]);
    // DB::table('sliders')->insert(
    //   [
    //     'title' => 'The TEST test test test test test.',
    //     'body' => 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.',
    //     'image' => '/sliders/May2019/2XokKzuDdSdHVjgrRD24.jpg',
    //   ]);
    
    // DB::table('sliders')->insert(
    //   [
    //     'title' => 'The TEST test test test test test.',
    //     'body' => 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.',
    //     'image' => '/sliders/May2019/2XokKzuDdSdHVjgrRD24.jpg',
    //   ]);
    // }
       }
}
