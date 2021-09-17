<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            [
                'id' => 1,
                'category_name' => '食品'
            ],
            [
                'id' => 2,
                'category_name' => '衣類'
            ],
            [
                'id' => 3,
                'category_name' => '雑貨'
            ]
        ]);
    }

}
