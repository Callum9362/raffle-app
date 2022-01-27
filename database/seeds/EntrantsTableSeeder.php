<?php

use Illuminate\Database\Seeder;
use App\Entrant;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Entrant::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Entrant::create([
                'fullname' => $faker->name,
                'telephone' => $faker->telephone,
                'raffle' => 'christmas',
                'won' => false,
            ]);
        }
    }
}
