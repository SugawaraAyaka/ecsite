<?php

use Illuminate\Database\Seeder;

class Sale_statusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_sale_statuses')->insert([
            [
                'id' =>1,
                'sale_status_name' => '販売中'
            ],
            [
                'id' =>2,
                'sale_status_name' => '売り切れ'
            ]
        ]);
    }
}
