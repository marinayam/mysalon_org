<?php

use Illuminate\Database\Seeder;

class BodyConcernTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $body_concerns = ['肩こり','目の疲れ','疲れやすい','睡眠不足','頭痛','ストレス','むくみ'];
        foreach ($body_concerns as $body_concern) {
            DB::table('chart_body_concerns')->insert(['body_concern' => $body_concern]);
        }
    }
}
