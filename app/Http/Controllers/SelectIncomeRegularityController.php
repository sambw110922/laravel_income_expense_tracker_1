<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income regularity model
use App\Models\IncomeRegularity;

//	Use income regularity belongs to model
use App\Models\IncomeRegularityBelongsTo;


//	Selects an income regularity object
class SelectIncomeRegularityController extends Controller
{
    
	//	selects income regularity by income id
	public function SelectIncomeRegularityByIncomeID($incomeID){

		$requestedIncomeRegularity = IncomeRegularity::where("incomeID", $incomeID)->first();
		
		return $requestedIncomeRegularity;

	}
    
}
