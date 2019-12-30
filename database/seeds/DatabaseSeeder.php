<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Panseriya',
            'email' => 'hardikpanseriya007@gmail.com',
            'password' => bcrypt('panseriya'),
        ]);
    }
}
