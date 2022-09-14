<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('income_BT', function (Blueprint $table) {
            $table->id();
            $table->foreignId("incomeID")->constrained("incomes");
            $table->foreignId("userID")->constrained("users"); 
            
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mig', function (Blueprint $table) {
            //
        });
    }
};
