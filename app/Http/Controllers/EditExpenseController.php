<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Get the income
use App\Http\Controllers\SelectIncomeController;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	This class handles the edit function for expenses.
class EditExpenseController extends Controller
{
    
    	//	Edit an expense.
	public function EditAnExpense(){
	
		//	Get the id.
		$id = request("txtExpenseid");
		
		//	Selects an expense by id.
		$sebed = new SelectExpenseController();
		
		//	Get the expense by id.
		$requestedExpense = $sebed->SelectExpenseByID($id);
		
		//	Get the expense name
		$expenseName = request("txtExpenseName");
		
		//	Get the expense value
		$expenseValue = request("txtAmmount");
		
		//	Get regularity
		$regularity = $requestedExpense->isOneOff;
		
		//	Update the model values
		$requestedExpense->expense_name = $expenseName;
		$requestedExpense->expense_value = $expenseValue;
		$requestedExpense->isOneOff = $regularity;
		
		//	Attempt to update
		$updateResult = $requestedExpense->save();
		
		if($updateResult == true){
			return "ok";
		} else {
			return "bad";
		}
		
	
	}
    
}
