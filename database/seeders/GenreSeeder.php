<?php

namespace Database\Seeders;

use App\Models\Genre;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $types = [
            'action',
            'adventure',
            'horror',
            'battle royale',
            'puzzle',
            'strategy',
            'sport'
        ];

        foreach ($types as $type) {
            $genre = new Genre();

            $genre->label = $type;
            $genre->color = $faker->hexColor();

            $genre->save();
        }
    }
}
