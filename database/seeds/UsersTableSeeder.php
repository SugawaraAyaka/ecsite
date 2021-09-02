<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'password' => bcrypt('sample1'),
                'last_name' => '山田',
                'first_name' => '太郎' ,
                'zipcode' => '1234567',
                'prefecture' => '富山県',
                'municipality' =>'富山市',
                'address' => '八尾町樫尾699番地12号',
                'apartments' => '',
                'email' => 'toyama@gmail.com',
                'phone_number' => '08012345678' ,
                'user_classification_id' => 3,
                'company_name' =>'株式会社山田',
                'delete_flag' => 0,
            ],
            [
                'password' => bcrypt('sample2'),
                'last_name' => '鈴木',
                'first_name' => '育子' ,
                'zipcode' => '8901234',
                'prefecture' => '大阪府',
                'municipality' => '大阪市',
                'address' => '中央区法円坂1丁目117番地12号',
                'apartments' => 'マンションA',
                'email' => 'osaka@gmail.com',
                'phone_number' => '08090123456',
                'user_classification_id' => 1,
                'company_name' => '株式会社鈴木',
                'delete_flag' => 0,
            ],
            [
                'password' => bcrypt('sample3'),
                'last_name' => '武田',
                'first_name' => '真里',
                'zipcode' => '5678901',
                'prefecture' => '京都府',
                'municipality' => '京都市',
                'address' => '伏見区淀水垂町509-16',
                'apartments' => 'マンションB',
                'email' => 'kyoto@gmail.co',
                'phone_number' => '08078901234',
                'user_classification_id' => 2,
                'company_name' =>'',
                'delete_flag' => 0,
            ],
        ]);
    }
}
