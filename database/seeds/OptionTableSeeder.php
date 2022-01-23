<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['選択しない','シヤンプー＆トリートメントケア 1,100円'];
        foreach ($options as $option) {
            DB::table('options')->insert(['option' => $option]);
            
        }
    }
}
