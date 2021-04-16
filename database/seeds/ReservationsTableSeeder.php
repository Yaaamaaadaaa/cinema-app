<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $schedule = DB::table('schedules')->first();
        
        DB::table('reservations')->insert([
            'user_id' => $user->id,
            'schedule_id' => $schedule->id,
            'reserved_seat' => "J20",
        ]);
    }
}
