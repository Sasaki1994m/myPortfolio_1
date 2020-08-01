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
        \DB::table('users')->insert([
            [
                'name' => '川端 莉緒',
                'email' => 'kawabata@info.com',
                'password' => 'kawabata',
                'role' => 'owner',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
            [
                'name' => '小玉 隆博',
                'email' => 'kodama@info.com',
                'password' => 'kodama',
                'role' => 'customer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // [
            //     'name' => '岩井 圭',
            //     'login_id' => 'iwai',
            //     'password' => '3242',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
        ]);
    }
}
