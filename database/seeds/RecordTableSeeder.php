<?php

use Illuminate\Database\Seeder;

class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = ['まつ毛パーマ','まつ毛エクステ','眉毛パーマ','眉アートメイク','アイラインアートメイク','レーシック','お目元の整形','下まつげ矯正手術','ピーリング','フォト・レーザー治療','ヒアルロン酸','ボトックス','お顔の脱毛'];
        foreach ($records as $record) {
            DB::table('records')->insert(['record' => $record]);
            
        }
    }
}
