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
         $this->call(CrustSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(PizzaSeeder::class);
    }
}
