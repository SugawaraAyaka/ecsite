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
        $this->call(UsersClassificationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ShipmentStatusesTableSeeder::class);
        $this->call(OrdersDetailsTableSeeder::class);
        $this->call(CategoriedTableSeeder::class);
        $this->call(Product_statusesTableSeeder::class);
        $this->call(Sale_statusesTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
    }
}
