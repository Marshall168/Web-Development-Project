<?php

namespace Database\Seeders;

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
        $a = new User;
        $a->name = "Scott";
        $a->email = "sjones2015@hotmail.co.uk";
        $a->password = "password123";
        $a->save();
    }
}
