<?php

namespace Database\Seeders;
use App\Models\User;
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
        $a->name = "Scott Jones";
        $a->email = "sjones2015@hotmail.co.uk";
        $a->password = "password123";
        $a->save();
    }
}
