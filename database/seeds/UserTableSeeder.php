<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kanji_names = ['山田花子','佐藤花子','田中花子'];
        $hira_names = ['やまだはなこ','さとうはなこ','たなかはなこ'];
        $emails = ['aaa@bbb.com','ccc@ddd.com','eee@fff.com'];
        $passwords = ['aaa','ccc','eee'];
        
        foreach ($kanji_names as $kanji_name) {
            DB::table('kanji_names')->insert(['kanji_name' => $kanji_name]);
        }
        foreach ($$hira_names as $hira_name) {
            DB::table('hira_names')->insert(['hira_name' => $hira_name]);
        }
        foreach ($emails as $email) {
            DB::table('email')->insert('email');
        }
        foreach ($passwords as $password) {
            DB::table('passwords')->insert('password');
        }
    }
}
