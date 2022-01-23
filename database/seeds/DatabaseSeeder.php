<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TriggerTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
    }
}
