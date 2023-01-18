<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
{
    // $this->call(UserSeeder::class);
    $this->call(ListingTableSeeder::class); // sostituire NomeModel con il nome effettivo del model
}
}
