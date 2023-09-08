<?php

namespace Database\Seeders;

use App\Models\Developer;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        $developersName =  [
            "Electronic Arts",
            "Ubisoft",
            "Rockstar Games",
            "Nintendo",
            "Activision Blizzard",
            "Epic Games",
            "Square Enix",
            "CD Projekt",
            "Capcom",
            "Bethesda Game Studios",
            "Valve",
            "Bioware",
            "343 Industries",
            "Riot Games",
        ];

        foreach ($developersName as $d) {
            $developer = new Developer();

            $developer->label = $d;
            $developer->year_production = $faker->numberBetween(2000, 2023);
            $developer->location = $faker->country();

            $developer->save();
        }
    }
}
