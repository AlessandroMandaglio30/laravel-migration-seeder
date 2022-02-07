<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\travel;

class travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $travel = new travel();
            $travel->departure = $faker->country();
            $travel->destination = $faker->country();
            $travel->return_date = $faker->dateTimeThisMonth('+5days');
            $travel->people_nr = $faker->randomDigit();
            $travel->price = $faker->randomFloat(2, 50, 1500);
            $travel->departure_date = $faker->dateTimeThisMonth();
            $travel->save();
        }
    }
}
