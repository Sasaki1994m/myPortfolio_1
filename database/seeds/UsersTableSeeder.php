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
             'name' =>'佐々木',
             'login_id' =>'1234',
             'password' => 'sasakio7'
            ],
            [
             'name' =>'山田',
             'login_id' =>'567',
             'password' => 'yamada9'
            ],

        ]);
    }
}
