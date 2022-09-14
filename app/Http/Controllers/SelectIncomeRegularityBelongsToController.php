<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income regularity model
use App\Models\IncomeRegularity;

//	Use income regularity belongs to model
use App\Models\IncomeRegularityBelongsTo;

//	Selects income regularities.
class SelectIncomeRegularityBelongsToController extends Controller
{
    
    	//	Selects an income regularity by the income id.
	public function SelectIncomeRegularityByIncomeID($incomeID){
	
		$requestedIncomeRegularityBelongsTo = IncomeRegularityBelongsTo::where("incomeID", $incomeID)->first();
		
		return $requestedIncomeRegularityBelongsTo;

	}
    
}
