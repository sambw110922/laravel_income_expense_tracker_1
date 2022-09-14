<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class expenseRegularityBelongsToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        
        DB::table('expenseRegularity_BT')->insert([
            'expenseID' => 1,
            'expenseRegularityID' => 1
        ]);
        
    }
}
