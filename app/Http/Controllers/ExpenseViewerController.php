<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	database
use Illuminate\Support\Facades\DB;

class ExpenseViewerController extends Controller
{

   
    	//	Selects all expenses by user id
	public function SelectExpensesByUserId($uid){
		
		//	Join clause.
		/*
			Is basically,
			
			SELECT
			 expenseBelongsTo.expenseID,
			 expenses.expensee_name,
			 expenses.expense_value
			FROM
			 expenseBelongsTo
			INNER JOIN
			 expenses
			ON
			 expenseBelongsTo.expenseID=expenses.id
			WHERE
			 expenseBelongsTo.userID = 1
			 
			 except for where 1 is $uid
			 
		*/
		
		$expensesByUserID = DB::table("expense_BT")->join("expenses", "expenses.id", "=", "expense_BT.expenseID")->select("expense_BT.expenseID", "expenses.expense_name", "expenses.expense_value")->where("expense_BT.userID", "=", $uid)->get();
            		
			
		return $expensesByUserID;	
		
	}

}
