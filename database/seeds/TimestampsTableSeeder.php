<?php

use Illuminate\Database\Seeder;
use App\Timestamp;

class TimestampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = new App\Timestamp([
            'user_id' => '1',
            'punch_in' => '2020-07-21 08:57:00',
            'Punch_out' => '2020-07-21 18:05:36'
        ]);
            $timestamp->save();
            
        $timestamp = new App\Timestamp([
            'user_id' => '2',
            'punch_in' => '2020-07-21 08:55:00',
            'Punch_out' => '2020-07-21 18:05:36'
        ]);
            $timestamp->save();

        $timestamp = new App\Timestamp([
            'user_id' => '1',
            'punch_in' => '2020-07-22 08:59:00',
            'Punch_out' => '2020-07-22 18:08:36'
        ]);
            $timestamp->save();
    }
}
