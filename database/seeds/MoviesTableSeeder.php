<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = DB::table('movies')->first();

        $titles = ['シン・エヴァンゲリオン劇場版', 'ラーヤと龍の王国(吹替)', 'ミッドナイトスワン'];
        $details = ['さらば、全てのエヴァンゲリオン', 'いま、世界の運命は彼女の手に', '世界で一番美しいラブストーリー'];

        foreach (array_map(NULL, $titles, $details) as [ $title, $detail ]) {
            DB::table('movies')->insert([
                'title' => $title,
                'detail' => $detail,
                'running_time' => '2:10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
