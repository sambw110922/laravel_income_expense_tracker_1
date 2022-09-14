<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use expense model
use App\Models\Expense;

//	Use expense belongs to model
use App\Models\ExpenseBelongsTo;

//	Selects the expense belongs to objects
class SelectExpenseBelongsToController extends Controller
{

	    //	Find an expense belongs to by expense id
	    public function SelectExpenseBelongsToByExpenseID($requestedExpenseID){
	    
	    	$expenseBelongsTo = ExpenseBelongsTo::where("expenseID", $requestedExpenseID)->first();
	    	
	    	return $expenseBelongsTo;  
	    
	    }
	    
	    //	Find all expense belongs to by user ID.
	    public function SelectExpenseBelongsToByUserID($requestedUserID){
	    
	    	$expenseBelongsTo = ExpenseBelongsTo::where("userID", $requestedUserID)->first();
	    	
	    	return $expenseBelongsTo;  
	    
	    }

}
