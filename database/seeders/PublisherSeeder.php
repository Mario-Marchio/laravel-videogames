<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 10; $i++){
            Publisher::create([
                'name' => $faker->company(),
                'email' => $faker->email(),
                'website' => $faker->url()
            ]);
        }
    }
}
