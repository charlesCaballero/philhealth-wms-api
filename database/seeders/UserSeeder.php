<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'hris'=>30734319,
            'fname'=>'Charles',
            'mname'=>'Gutierrez',
            'lname'=>'Caballero',
            'email'=>'charles.g.caballero@gmail.com',
            'position'=>'Social Insurance Assistant I',
            'contact_number'=>'09971865108',
            'employment_stat'=>'casual',
            'status'=>true,
            'password'=>bcrypt('456Knight'),
            'office_id'=>1,
        ]);
    }
}
