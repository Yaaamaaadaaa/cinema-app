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
        $titles = ['シン・エヴァンゲリオン劇場版', 'ラーヤと龍の王国(吹替)', 'ミッドナイトスワン', '砕け散るところを見せてあげる', '映画 モンスターハンター', '劇場版「鬼滅の刃」無限列車編'];
        $details = ['さらば、全てのエヴァンゲリオン', 'いま、世界の運命は彼女の手に', '世界で一番美しいラブストーリー', '常識を覆す、衝撃の愛の物語', '想像を絶する、世界へ。', '果てなく続く 無限の夢の中へ'];

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
