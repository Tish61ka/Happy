<?php

namespace Database\Seeders;

use Faker\Core\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\Models\Product::factory()->create([
      'title' => 'Клубничное мороженное в вафельным стаканчиком',
      'price' => 300,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/strawberry.png',
      'structure' => 'Клубника:    300г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженное в вафельным стаканчиком',
      'price' => 200,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/yellowicecream.png',
      'structure' => 'Бананы:    300г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
  }
}
