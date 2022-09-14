<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	database
use Illuminate\Support\Facades\DB;

//	This class gets all of the income regularity data.
class IncomeReguarirtyViewerController extends Controller
{
    
    	//	Selects an income regularity by income id.
	public function SelectIncomeRegularityById($incomeid){
	
		/*
		
			IS BASICALLY THIS SQL:
			
			SELECT

			incomeRegularityBelongsTo.incomeID,
			incomes.income_name,
			incomeRegularity.isWeekly,
			incomeRegularity.isMonthly,
			incomeRegularity.isAnnual,
			incomeRegularity.isOneOff

			FROM

			incomeRegularity

			INNER JOIN 

			incomeRegularityBelongsTo

			INNER JOIN 

			incomes

			ON

			incomeRegularityBelongsTo.incomeID = incomeRegularity.incomeID AND 
			incomes.id = incomeRegularityBelongsTo.incomeID

			WHERE

			incomes.id = 22


		*/
		
		
		$incomeRegularityByIncomeID = DB::table("incomeRegularity")
			->join("incomeRegularity_BT", "incomeRegularity_BT.incomeID", "=", "incomeRegularity.incomeID")
			->join("incomes", "incomes.id", "=", "incomeRegularity_BT.incomeID")
			->select("incomeRegularity_BT.incomeID", "incomes.income_name", "incomeRegularity.isWeekly", "incomeRegularity.isMonthly", "incomeRegularity.isAnnual", "incomeRegularity.isOneOff")->where("incomes.id", "=", $incomeid)->get()->first();
			
			return $incomeRegularityByIncomeID;
		
	
	}
    
}
