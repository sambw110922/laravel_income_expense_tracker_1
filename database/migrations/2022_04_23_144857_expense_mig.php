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
    
        //	expense_name = name of the expense
        //	expense_value = value of the expense
        //	isOneOff = if the expense is a one-off
        //		like a car or regular expense like wages
	Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string("expense_name");
            $table->float("expense_value");
            $table->integer("isOneOff");    
	});
	
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
