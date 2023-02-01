<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Stores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <11 ; $i++) { 
            DB::table('stores')->insert([
                'name' => 'stores '.Str::random(10),
                'idUser' => random_int(23,33),

            ]);
        }
    }
}
