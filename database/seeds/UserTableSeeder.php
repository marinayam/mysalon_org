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
        $names01 = ['山田花子','佐藤花子','田中花子'];
        $names02 = ['やまだはなこ','さとうはなこ','たなかはなこ'];
        $emails = ['aaa@bbb.com','ccc@ddd.com','eee@fff.com'];
        $passwords = ['aaa','ccc','eee'];
        
        foreach ($names01 as $name01) {
            DB::table('names01')->insert(['name01' => $name01]);
        }
        foreach ($names02 as $name02) {
            DB::table('names02')->insert(['name02' => $name02]);
        }
        foreach ($emails as $email) {
            DB::table('email')->insert('email');
        }
        foreach ($passwords as $password) {
            DB::table('passwords')->insert('password');
        }
    }
}
