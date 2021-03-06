<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_orders')->insert([
            [
                'user_id' => 1,
                'order_date' => '2021-08-31',
            ],
            [
                'user_id' => 3,
                'order_date' => '2021-09-01',
            ],
            [
                'user_id' => 2,
                'order_date' => '2021-09-02',
            ]
        ]);
    }
}
