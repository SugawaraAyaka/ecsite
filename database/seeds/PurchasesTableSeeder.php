<?php

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_purchases')->insert([
            [
                'id'                => 1,
                'purchase_price'    => 700,
                'purchase_quantity' => 3,
                'purchase_company'  => '食品会社',
                'description'       => 'マンゴー',
                // 'order_date'        => '2021-05-13 12:30:30',
                // 'purchase_date'     => '2021-05-13 12:30:30',
                'product_id'        => 1
            ],
            [
                'id'                => 2,
                'purchase_price'    => 800,
                'purchase_quantity' => 3,
                'purchase_company'  => 'ファッション会社',
                'description'       => 'ワンピース',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 2
            ],
            [
                'id'                => 3,
                'purchase_price'    => 500,
                'purchase_quantity' => 2,
                'purchase_company'  => 'ファッション会社',
                'description'       => 'Tシャツ',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 2
            ],
            [
                'id'                => 4,
                'purchase_price'    => 500,
                'purchase_quantity' => 2,
                'purchase_company'  => '食品会社',
                'description'       => 'バナナ',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 1
            ],
            [
                'id'                => 5,
                'purchase_price'    => 700,
                'purchase_quantity' => 5,
                'purchase_company'  => 'ファッション会社',
                'description'       => 'パジャマ',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 2
            ],
            [
                'id'                => 6,
                'purchase_price'    => 800,
                'purchase_quantity' => 3,
                'purchase_company'  => '食品会社',
                'description'       => '青森りんご',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 2
            ],
            [
                'id'                => 7,
                'purchase_price'    => 700,
                'purchase_quantity' => 10,
                'purchase_company'  => 'ファッション会社',
                'description'       => 'ジーンズ',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 2
            ],
            [
                'id'                => 8,
                'purchase_price'    => 500,
                'purchase_quantity' => 5,
                'purchase_company'  => '雑貨会社',
                'description'       => 'クッション',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 3
            ],
            [
                'id'                => 9,
                'purchase_price'    => 1000,
                'purchase_quantity' => 5,
                'purchase_company'  => '雑貨会社',
                'description'       => 'カーペット',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 3
            ],
            [
                'id'                => 10,
                'purchase_price'    => 1500,
                'purchase_quantity' => 5,
                'purchase_company'  => '雑貨会社',
                'description'       => '加湿器',
                // 'order_date'        => '2021-09-05 12:30:30',
                // 'purchas_date'      => '2021-09-05 12:30:30',
                'product_id'        => 3
            ]
        ]);
    }
}
