<?php

use App\Listing;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ListingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $listing = new Listing();
            $listing->company = $faker->randomElement(['Italo','Trenitalia','Italferr','RFI','Ferservizi']);
            $listing->departure_station = $faker->randomElement(['Roma','Milano','Torino','Napoli','Palermo']);
            $listing->arrival_station = $faker->randomElement(['Roma','Milano','Torino','Napoli','Palermo']);
            $listing->departure_time = rand(0,24);
            $listing->arrival_time = rand(0,24);
            $listing->train_code = rand(10000,50000);
            $listing->carriage_number = rand(1,9);
            $listing->in_time = [true, false][rand(0, 1)];
            $listing->cancelled = [true, false][rand(0, 1)];
            $listing->deadline = $faker->date();
            $listing->save();
        }
    }
    }
