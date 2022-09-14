<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class IncomeRegularitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	DB::table('incomeRegularity')->insert([
            'isMonthly' => 0,
            'isAnnual' => 0,
            'isWeekly' => 0,
            'isOneOff' => 1,
            'incomeID' => 1
        ]);

    }
}
