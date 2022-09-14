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

	Schema::create('expenseRegularity_BT', function (Blueprint $table) {
            $table->id();
            $table->foreignId("expenseID")->constrained("expenses");
            $table->foreignId("expenseRegularityID")->constrained("expenseRegularity");
              
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
