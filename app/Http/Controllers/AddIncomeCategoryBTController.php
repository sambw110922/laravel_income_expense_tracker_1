<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income category belongs to model
use App\Models\IncomeCategory_BT;

//	Adds an income category belongs to.
class AddIncomeCategoryBTController extends Controller
{


	//	Adds one income category belongs to into the db.
	public function AddIncomeCategoryBT($incomeCategoryID){
	
	    	//	get the user id
		$userID = Auth::user()->id;
		
		//	Make instance of saved income category belongs to
		$savedIncomeCategoryBT = new IncomeCategory_BT;
		
		//	Assign values to the instance
		$savedIncomeCategoryBT->incomeCategoryID = $incomeCategoryID;
		
		$savedIncomeCategoryBT->userID = $userID;
		
		//	Save the category belongs to.
		$savedIncomeCategoryBT->save();
	
	}

}
