<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	database
use Illuminate\Support\Facades\DB;

//	This class looks up incomes by the user.
class IncomesViewerController extends Controller
{
    
    	//	Selects all incomes by user id
	public function SelectIncomesByUserId($uid){
		
		//	Join clause.
		/*
			Is basically,
			
			SELECT
			 incomeBelongsTo.incomeID,
			 incomes.income_name,
			 incomes.income_value
			FROM
			 incomeBelongsTo
			INNER JOIN
			 incomes
			ON
			 incomeBelongsTo.incomeID=incomes.id
			WHERE
			 incomeBelongsTo.userID = 1
			 
			 except for where 1 is $uid
			 
		*/
		$incomesByUserID = DB::table('income_BT')
            ->join('incomes', 'incomes.id', '=', 'income_BT.incomeID')
            ->select("income_BT.incomeID", "incomes.income_name", "incomes.income_value")
            ->where("income_BT.userID", "=", $uid)
            ->get();
            		
			
		return $incomesByUserID;	
		
	}
    
}
