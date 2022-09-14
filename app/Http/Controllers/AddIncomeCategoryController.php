<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use the add income regularity controller
use App\Http\Controllers\AddIncomeCategoryBTController;

//	Use income category model
use App\Models\IncomeCategory;

//	Use income category belongs to model
use App\Models\IncomeCategory_BT;

//	Performs the actions required for adding an income category.
class AddIncomeCategoryController extends Controller
{

	//	Adds an income category.
	public function AddAnIncomeCategory(){
	
	    	//	get the user id
		$userID = Auth::user()->id;
		
		//	Get the name of the income category.
		$incomeCategoryName = request("txtIncomeCategoryName");
		
		//	New instance of IncomeCategory model.
		$savedIncomeCategory = new IncomeCategory;
		
		//	Assign the income category name.
		$savedIncomeCategory->category_name = $incomeCategoryName;
		
		//	Insert into database.
		$savedIncomeCategory->save();
		
		//	Get the ID of the last income category saved.
		$savedIncomeCategoryID = $savedIncomeCategory->id;
		
		//	Add income category belongs to controller
		$aicbtc = new AddIncomeCategoryBTController();
		
		//	Make a new income category belongs to
		$aicbtc->AddIncomeCategoryBT($savedIncomeCategoryID);
		
	}

}
