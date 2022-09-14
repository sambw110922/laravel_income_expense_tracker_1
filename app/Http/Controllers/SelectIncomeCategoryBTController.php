<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	database
use Illuminate\Support\Facades\DB;

//	Use income category belongs to model
use App\Models\IncomeCategory_BT;

//	Selects the income category belongs to models
class SelectIncomeCategoryBTController extends Controller
{

	//	Selects income categories by user id
	public function SelectIncomeCategoryByUserID($userID){
	
		//	Get the income categories bt
		$incomeCategoriesBT = DB::table(
			"incomeCategory_BT"
		)->where(
			"userID",
			"=",
			$userID
		)->get();
		
		return $incomeCategoriesBT;
	
	}

}
