<?php

namespace Database\Seeders;

use App\Models\Publisher;
use App\Models\Console;
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
        $publisher_ids = Publisher::pluck('id')->toArray();

        // Take all the console from database
        $consoles_id = Console::pluck('id')->toArray();


        for ($i = 1; $i <= 50; $i++) {
            $videogame = new Videogame();
            $videogame->publisher_id = $publisher_ids[array_rand($publisher_ids)];
            $videogame->title = $faker->words(3, true);
            $videogame->image = $faker->imageUrl(250, 250);
            $videogame->release_year = $faker->dateTimeBetween('-10 years');
            $videogame->rate = $faker->numberBetween(1, 5);
            $videogame->save();

            // Add relation many to many
            $consoles = [];
            foreach ($consoles_id as $c) {
                if ($faker->boolean()) $consoles[] = $c;
            }

            $videogame->consoles()->attach($consoles);
        }
    }
}
