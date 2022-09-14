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

        //	income_name = name of the expense
        //	income_value = value of the income
        //	isOneOff = if the income is a one-off
        //		like a lottery win or regular income like wages
	Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string("income_name");
            $table->float("income_value");
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
        //	todo
    }
};
