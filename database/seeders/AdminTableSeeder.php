<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Admin;
        $a->name = "Scott Jones";
        $a->email = "sjones2015@hotmail.co.uk";
        $a->save();

    }
}
