<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offices')->insert([
            'office_code'=>'00',
            'office_type'=>'Section',
            'name'=>"Information Technology Management Section",
            'acronym'=>'ITMS',
            'address'=>'8th floor, Gateway Tower II, Limketkai, Lapasan, CDOC',
        ]);
    }
}
