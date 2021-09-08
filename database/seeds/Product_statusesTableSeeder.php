<?php

use Illuminate\Database\Seeder;

class Product_statusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_product_statuses')->insert([
            [
                'id' =>1,
                'product_status_name' => '在庫あり'
            ],
            [
                'id' =>2,
                'product_status_name' => '在庫なし 入荷予定あり'
            ],
            [
                'id' =>3,
                'product_status_name' => '在庫なし 入荷予定なし'
            ]
        ]);
    }
}
