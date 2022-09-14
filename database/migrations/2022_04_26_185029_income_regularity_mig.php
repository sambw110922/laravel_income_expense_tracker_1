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

	Schema::create('incomeRegularity', function (Blueprint $table) {
            $table->id();
            $table->integer("isMonthly");
            $table->integer("isAnnual");
            $table->integer("isWeekly");
            $table->integer("isOneOff");
            $table->foreignId("incomeID")->constrained("incomes");  
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
