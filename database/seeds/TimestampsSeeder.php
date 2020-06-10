<?php

use Illuminate\Database\Seeder;

class TimestampsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('timestamps')->insert([
            [
                'user_id' => '3',
                'punchIn' => '2020-06-04 15:25:07',
                'PunchOut' => '2020-06-04 16:40:07',
            ],
            [
                'user_id' => '3',
                'punchIn' => '2020-06-04 15:25:07',
                'PunchOut' => '2020-06-04 16:40:07',
            ]
        ]);
    }
}
