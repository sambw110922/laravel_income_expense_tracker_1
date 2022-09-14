<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExpenseRegularitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         
	DB::table('expenseRegularity')->insert([
            'isMonthly' => 0,
            'isAnnual' => 0,
            'isWeekly' => 0,
            'isOneOff' => 1,
            'expensesID' => 1
        ]);
        
    }
}
