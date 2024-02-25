<?php

use Illuminate\Database\Seeder;
use Database\Seeders\ProductsTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductsTableSeeder::class);
    }
}
