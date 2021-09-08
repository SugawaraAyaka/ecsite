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
        $this->call([
            CategoriedTableSeeder::class,
            Product_statusesTableSeeder::class,
            Sale_statusesTableSeeder::class,
            ProductTableSeeder::class,
            PurchasesTableSeeder::class
        ]);

    }
}
