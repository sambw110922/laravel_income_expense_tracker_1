<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use expense model
use App\Models\Expense;

//	Use expense belongs to model
use App\Models\ExpenseBelongsTo;

//	Select an expense.
use App\Http\Controllers\SelectExpenseontroller;

//	Select an expense belongs to.
use App\Http\Controllers\SelectExpenseBelongsToController;

//	Delete a belongs to controller.
use App\Http\Controllers\DeleteExpenseBelongsToController;

//	This class performs delete operations for expenses
class DeleteExpenseBelongsToController extends Controller
{

	//	Deletes an expense
	public function DeleteExpenseBelongsToByExpenseID($ebt){

		$result = false;
		
		$result = $ebt->delete();
		
		return $result;

	}

}
