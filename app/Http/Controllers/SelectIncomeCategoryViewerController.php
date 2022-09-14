<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	database
use Illuminate\Support\Facades\DB;

//	Use income category model
use App\Models\IncomeCategory;

//	Use income category belongs to model
use App\Models\IncomeCategory_BT;

//	Use the select income category bt controller
use App\Http\Controllers\SelectIncomeCategoryBTController;

//use App\Http\Controllers\SelectIncomeCategoryViewerController;

//	Selects income categories for the income category viewer.
class SelectIncomeCategoryViewerController extends Controller
{
    
	//	Selects all income categories by the user id
	public function SelectAllIncomeCategoriesByUserID($userID){
		
		//	Select income category belongs to controller
		$sicbtc = new SelectIncomeCategoryBTController();
		
		//	Get all of the income category belongs to by the user id.
		$requestedIncomeCategoryBT = $sicbtc->SelectIncomeCategoryByUserID($userID);
		
		$requestedIncomeCategoryBTJSON = $requestedIncomeCategoryBT;
		
		$totalIncomeCategories = array();
		
		foreach($requestedIncomeCategoryBTJSON as $incat){
			array_push($totalIncomeCategories, $this->GetIncomeCategoryByCategoryID($incat->incomeCategoryID));
		}
		
		return $totalIncomeCategories;
		
	}
	
	//	Gets a single income gategory by id
	public function GetIncomeCategoryByCategoryID($catid){
	
		//	Get the income categories bt
		$requestedIncomeCategory = DB::table(
			"incomeCategory"
		)->where(
			"id",
			"=",
			$catid
		)->get()->first();
		
		return $requestedIncomeCategory;
		
	}
    
}
