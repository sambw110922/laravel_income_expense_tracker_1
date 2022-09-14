<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	Select an income.
use App\Http\Controllers\SelectIncomeController;

//	Select an income belongs to.
use App\Http\Controllers\SelectIncomeBelongsToController;

//	Delete a belongs to controller.
use App\Http\Controllers\DeleteIncomeBelongsToController;

class DeleteExpenseController extends Controller
{
    
    //	Deletes a n expense. 
    public function DeleteAnExpense(){
    
    	//	Get the user id
    	$userID = Auth::user()->id;
    	
    	//	Get the expense reference.
    	$sec = new SelectExpenseController();
    	
    	//	The requested income id
    	$requestedID = request("expenseid");
    	
    	//	The expense object by the id
    	$expense = $sec->SelectExpenseByID($requestedID);
    	
    	//	Get the expense belongs to reference.
    	$sebtc = new SelectExpenseBelongsToController();
    	
    	$expenseID = $expense->id;
    	
    	//	Get the selected expense belongs to by expense id
    	$expenseBelongsTo = $sebtc->SelectExpenseBelongsToByExpenseID($expenseID);
    	
    	//	Delete expense belongs to controller
    	$debtc = new DeleteExpenseBelongsToController();
    	
    	//	Remove from db
    	$deleteExpenseBelongsToResult = $debtc->DeleteExpenseBelongsToByExpenseID($expenseBelongsTo);
    	
    	//	Delete the expense proper.
    	$deleteExpenseResult = $expense->delete();
    	
    	//	If delete was ok, return to dashboard
	if($deleteExpenseResult == true){
		return view("dashboard");
	} else {
		return "error";
	}
		
    
    }
    
}
