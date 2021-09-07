<?php

use Illuminate\Database\Seeder;

class ShipmentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_shipment_statuses')->insert([
            [
                'shipment_status_name' => '発送準備中',
            ],
            [
                'shipment_status_name' => '発送完了',
            ]
        ]);
    }
}
