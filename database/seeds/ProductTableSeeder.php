<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_products')->insert([
            [
                'id'                => 1,
                'product_name'      => 'マンゴー',
                'category_id'       => 1,
                'price'             => 800,
                'description'       => '沖縄の美味しいマンゴーです。',
                'sale_status_id'    => 1,
                'product_status_id' => 1,
                'regist_date'       => new DateTime,
                'user_id'           => 1
            ],
            [
                'id'                => 2,
                'product_name'      => 'ワンピース',
                'category_id'       => 2,
                'price'             => 1000,
                'description'       => '限定のワンピースです。',
                'sale_status_id'    => 2,
                'product_status_id' => 2,
                'regist_date'       => new DateTime,
                'user_id'           => 2
            ],
            [
                'id'                => 3,
                'product_name'      => 'Tシャツ',
                'category_id'       => 2,
                'price'             => 800,
                'description'       => '涼しげなTシャツです',
                'sale_status_id'    => 2,
                'product_status_id' => 2,
                'regist_date'       => new DateTime,
                'user_id'           => 3
            ],
            [
                'id'                => 4,
                'product_name'      => '南国バナナ',
                'category_id'       => 1,
                'price'             => 500,
                'description'       => '南国の美味しいバナナです。',
                'sale_status_id'    => 2,
                'product_status_id' => 2,
                'regist_date'       => new DateTime,
                'user_id'           => 4
            ],
            [
                'id'                => 5,
                'product_name'      => 'パジャマ',
                'category_id'       => 2,
                'price'             => 1200,
                'description'       => '寝心地の良いパジャマです',
                'sale_status_id'    => 2,
                'product_status_id' => 2,
                'regist_date'       => new DateTime,
                'user_id'           => 5
            ],
            [
                'id'                => 6,
                'product_name'      => '青森のりんご',
                'category_id'       => 1,
                'price'             => 1000,
                'description'       => '甘い青森のりんごです',
                'sale_status_id'    => 2,
                'product_status_id' => 3,
                'regist_date'       => new DateTime,
                'user_id'           => 6
            ],
            [
                'id'                => 7,
                'product_name'      => 'ジーンズ',
                'category_id'       => 2,
                'price'             => 1500,
                'description'       => '何にでも合わせやすいジーンズです',
                'sale_status_id'    => 1,
                'product_status_id' => 1,
                'regist_date'       => new DateTime,
                'user_id'           => 7
            ],
            [
                'id'                => 8,
                'product_name'      => 'クッション',
                'category_id'       => 3,
                'price'             => 700,
                'description'       => 'フカフカのクッションです',
                'sale_status_id'    => 1,
                'product_status_id' => 1,
                'regist_date'       => new DateTime,
                'user_id'           => 8
            ],
            [
                'id'                => 9,
                'product_name'      => 'カーペット',
                'category_id'       => 3,
                'price'             => 3000,
                'description'       => '季節問わず使用可能のカーペットです',
                'sale_status_id'    => 1,
                'product_status_id' => 1,
                'regist_date'       => new DateTime,
                'user_id'           => 9
            ],
            [
                'id'                => 10,
                'product_name'      => '加湿器',
                'category_id'       => 3,
                'price'             => 3500,
                'description'       => '限定デザインの加湿器です。36時間加湿可能。',
                'sale_status_id'    => 2,
                'product_status_id' => 3,
                'regist_date'       => new DateTime,
                'user_id'           => 10
            ]
        ]);
    }
}
