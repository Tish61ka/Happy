<?php

namespace Database\Seeders;

use App\Models\Review;
use Faker\Core\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class product extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\Models\User::factory()->create([
      'id' => 1,
      'name' => 'Admin',
      'password' => Hash::make('admin'),
      'tel' => '8967331276',
      'address' => 'admin))',
      'email' => 'danchik.kun@mail.ru',
      'role' => 1
    ]);
    \App\Models\User::factory()->create([
      'id' => 2,
      'name' => 'Данилка',
      'password' => Hash::make('123345654234'),
      'tel' => '89673312786',
      'address' => 'Кубанская 17',
      'email' => 'danchik@mail.ru',
      'role' => 0
    ]);
    \App\Models\User::factory()->create([
      'id' => 3,
      'name' => 'Руслан',
      'password' => Hash::make('123345654234'),
      'tel' => '89276625589',
      'address' => 'Ильлинка',
      'email' => 'ruslan@mail.ru',
      'role' => 0
    ]);
    \App\Models\User::factory()->create([
      'id' => 4,
      'name' => 'Антошка',
      'password' => Hash::make('123345654234'),
      'tel' => '89029534311',
      'address' => 'Где-то на десятке',
      'email' => 'antoshka@mail.ru',
      'role' => 0
    ]);
    \App\Models\User::factory()->create([
      'id' => 5,
      'name' => 'Саня',
      'password' => Hash::make('123345654234'),
      'tel' => '89886858415',
      'address' => 'Где-то в Элисте',
      'email' => 'sanya@mail.ru',
      'role' => 0
    ]);
    \App\Models\Type::factory()->create([
      'id' => 1,
      'type' => 'Клубничное',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 2,
      'type' => 'Фисташковое',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 3,
      'type' => 'Ванильное',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 4,
      'type' => 'Шоколадное',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 5,
      'type' => 'Банановое',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 6,
      'type' => 'Мятное',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 7,
      'type' => 'Карамельное',
    ]);
    \App\Models\Type::factory()->create([
      'id' => 8,
      'type' => 'Ореховое',
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Клубничное мороженое в вафельном стаканчике',
      'price' => 300,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/strawberrylight.png',
      'structure' => 'Клубника:    300г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 1,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Клубничное мороженое в шоколадном стаканчике',
      'price' => 300,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/strawberrydark.png',
      'structure' => 'Клубника:    300г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 1,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженое в вафельном стаканчике',
      'price' => 200,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/bananalight.png',
      'structure' => 'Бананы:    100г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 5,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженое в шоколадном стаканчике',
      'price' => 200,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/bananadark.png',
      'structure' => 'Бананы:    100г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 5,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Фисташковое мороженое в вафельном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/phisthiolight.png',
      'structure' => 'Фисташки:    100г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 2,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Фисташковое мороженое в шоколадном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/phistachiodark.png',
      'structure' => 'Фисташки:    100г
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 2,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Ванильное мороженое в вафельном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/vanillight.png',
      'structure' => 'Цельное молоко:    100мл
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 3,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Ванильное мороженое в шоколадном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/vanildark.png',
      'structure' => 'Цельное молоко:    100мл
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 3,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Шоколадное мороженое в вафельном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/chocolatelight.png',
      'structure' => 'Шоколад:    50гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 4,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Шоколадное мороженое в шоколадном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/chocolatedark.png',
      'structure' => 'Шоколад:    50гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 4,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженое в вафельном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/bananalight.png',
      'structure' => 'Бананы:    150гр
                      Сахар:    50г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 5,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Банановое мороженое в шоколадном стаканчике',
      'price' => 350,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/bananadark.png',
      'structure' => 'Бананы:    150гр
                      Сахар:    50г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 5,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Мятное мороженое в вафельном стаканчике',
      'price' => 450,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/mintlight.png',
      'structure' => 'Мята:    20гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 6,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Мятное мороженое в шоколадном стаканчике',
      'price' => 450,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/mintdark.png',
      'structure' => 'Мята:    20гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 6,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Карамельное мороженое в шоколадном стаканчике',
      'price' => 250,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/carameldark.png',
      'structure' => 'Карамель:    20гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 7,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Мороженое с маслом ореха пекан в вафельном стаканчике',
      'price' => 400,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/nutslight.png',
      'structure' => 'Орехи пекан:    50гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 8,
    ]);
    \App\Models\Product::factory()->create([
      'title' => 'Мороженое с маслом ореха пекан в шоколадном стаканчике',
      'price' => 400,
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
      'image' => '/img/nutsdark.png',
      'structure' => 'Орехи пекан:    50гр
                      Сахар:    80г
                      Кукурузный крахмал:    20г
                      Сливки 10-20%:    250г',
      'type' => 8,
    ]);
    Review::factory(4)->create([
      'name' => 'Данилка Куничкин',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
    ]);
  }
}
