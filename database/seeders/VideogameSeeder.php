<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 50; $i++) {
            $videogame = new Videogame();
            $videogame->title = $faker->words(3, true);
            $videogame->image = $faker->imageUrl(250, 250);
            $videogame->release_year = $faker->dateTimeBetween('-10 years');
            $videogame->rate = $faker->numberBetween(1, 5);
            $videogame->save();
        }
    }
}
