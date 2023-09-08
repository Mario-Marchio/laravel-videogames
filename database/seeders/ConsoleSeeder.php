<?php

namespace Database\Seeders;

use App\Models\Console;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        $consolesName =  [
            "PlayStation 4",
            "PlayStation 5",
            "Xbox",
            "Xbox 360",
            "Xbox One",
            "Xbox Series X",
            "Nintendo 64",
            "Nintendo GameCube",
            "Wii",
            "Nintendo Switch",
            "Sony PSP",
            "Xbox Series S",
        ];

        foreach ($consolesName as $c) {
            $console = new Console();

            $console->label = $c;
            $console->year_production = $faker->numberBetween(2000, 2023);
            $console->company = $faker->company();

            $console->save();
        }
    }
}
