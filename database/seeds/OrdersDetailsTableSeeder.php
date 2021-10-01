<?php

use Illuminate\Database\Seeder;

class OrdersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_orders_details')->insert([
            [
                'products_id' => 1,
                'order_id' =>3,
                'shipment_status_id' => 1,
                'order_detail_number' => 1,
                'order_quantity' => 3,
                'shipment_date' => '2021-09-05',
            ],
            [
                'products_id' => 3,
                'order_id' =>2,
                'shipment_status_id' => 1,
                'order_detail_number' => 2,
                'order_quantity' => 8,
                'shipment_date' => '2021-09-07',
            ],
            [
                'products_id' => 2,
                'order_id' =>1,
                'shipment_status_id' => 2,
                'order_detail_number' => 3,
                'order_quantity' => 5,
                'shipment_date' => '2021-09-09',
            ],
        ]);
    }
}
