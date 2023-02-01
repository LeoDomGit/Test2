<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <11 ; $i++) { 
            DB::table('products')->insert([
                'name' => 'Products '.random_int(1,10),
                'idStore' => random_int(14,23),
                'price' => random_int(1000000,19000000),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
