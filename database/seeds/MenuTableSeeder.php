<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = ['ラッシュリフト 80分','フラットラッシュカラー','アイブロウ'];
        foreach ($menus as $menu) {
            DB::table('menus')->insert(['menu' => $menu]);
            
        }
    }
}
