<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use expense model
use App\Models\Expense;


//	Selects an expense.
class SelectExpenseController extends Controller
{
    
    //	Selects an expense by ID.
    public function SelectExpenseByID($requestedID){
    	
    	$expense = Expense::find($requestedID);
    	
    	return $expense;
    	
    }
    
}
