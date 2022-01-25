<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\{
    CategorySeeder,
    MethodPaymentSeeder,
    RolesSeeder
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $seedersArray = [
            CategorySeeder::class,
            MethodPaymentSeeder::class,
            RolesSeeder::class,
        ];

        //call seeders
        foreach ($seedersArray as $seeder) $this->call($seeder);
    }
}
