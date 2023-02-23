<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'ddicoder',
            'email'=>'ddicoder@gmail.com',
            'phone'=>'09300300300',
            'password'=>bcrypt('123123123')
        ]);
    }
}
