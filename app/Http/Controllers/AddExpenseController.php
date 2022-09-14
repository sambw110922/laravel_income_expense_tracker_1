<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use expense model
use App\Models\Expense;

//	Use income belongs to model
use App\Models\ExpenseBelongsTo;

class AddExpenseController extends Controller
{
    
    //	Adds an expense.
    public function AddAnExpense(){
    	
    	
     	//	get the user id
    	$userID = Auth::user()->id;
    	
    	//	Get the data from form.
    	$expenseName = request("txtExpensename");
    	$expenseValue = request("txtAmmount");
    	
    	//	False by default
    	$isRegular = false;
    	
    	//	If this is checked, then set to true
    	if(request("chkIsOneOff") == "isOneOff"){
    		$isOneOff = true;
    	}
    	
    	//	Make a new expense.
    	$savedExpense = new Expense;
    	
    	
    	//	Assign income.
    	$savedExpense->expense_name = $expenseName;
    	$savedExpense->expense_value = $expenseValue;
    	$savedExpense->isOneOff = $isRegular;
    	
    	//	Save the income
    	$savedExpense->save();
    	
    	//	Reference the new income with the user
    	$savedExpenseRef = new ExpenseBelongsTo;
    	
    	//	Get attributes
    	$savedExpenseRef->userID = $userID;
    	$savedExpenseRef->expenseID = $savedExpense->id;
    	
    	//	Save the reference
    	$savedExpenseRef->save();
    	
    }
    
}
