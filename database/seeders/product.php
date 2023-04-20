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
      'title' => 'Клубничное мороженое в вафельным стаканчиком',
      'price' => 300,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/strawberry.png',
      'structure' => 'Клубника:    300г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженое в вафельным стаканчиком',
      'price' => 200,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/yellowicecream.png',
      'structure' => 'Бананы:    100г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Фисташковое мороженое с вафельным стаканчиком',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/pistachioicecream.png',
      'structure' => 'Фисташки:    100г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Ванильное мороженое с вафельным стаканчиком',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/vanilicecream.png',
      'structure' => 'Цельное молоко:    100мл
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Шоколадное мороженое с вафельным стаканчиком',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/chocolateicecream 3.png',
      'structure' => 'Шоколад:    50гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженое с вафельным стаканчиком',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/bananaicecream2 1.png',
      'structure' => 'Бананы:    150гр
                      Сахар:    50г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Шоколадное мороженое с вафельным стаканчиком',
      'price' => 450,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/minticecream.png',
      'structure' => 'Мята:    20гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Карамельное мороженое с пластиковым стаканчиком',
      'price' => 250,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/caramelicecream.png',
      'structure' => 'Карамель:    20гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Мороженое с маслом ореха пекан в вафельном стаканчике',
      'price' => 400,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/walnuticecream.png',
      'structure' => 'Орези пекан:    50гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
    ]);
  }
}
