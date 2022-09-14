<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class incomeCategoryAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

/*

        Schema::create('incomeCategory_A', function (Blueprint $table) {
            $table->id();
            $table->foreignId("incomeCategoryID")->constrained("incomeCategory");
            $table->foreignID("incomeID")->constrained("incomes");
        }); 
    }

*/

        DB::table('incomeCategory_A')->insert([
            'incomeCategoryID' => 1,
            'incomeID' => 1
        ]);

    }
}
