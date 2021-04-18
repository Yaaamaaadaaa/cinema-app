<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = DB::table('movies')->get();

        $theater_numbers = [1, 2, 6];
        $start_times = ['11:00', '13:30', '15:00'];

        foreach ($movies as $movie) {
            foreach (array_map(NULL, $theater_numbers, $start_times) as [ $theater_number, $start_time ]) {
                DB::table('schedules')->insert([
                    'movie_id' => $movie->id,
                    'day' => Carbon::parse('2021-04-01'),
                    'theater_number' => $theater_number,
                    'start_time' => $start_time,
                ]);
            }
        }
    }
}