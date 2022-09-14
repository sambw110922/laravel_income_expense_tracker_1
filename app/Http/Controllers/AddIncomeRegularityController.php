<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\IncomeRegularity;

//	Use income regularity belongs to model
use App\Models\IncomeRegularityBelongsTo;

//	Adds an income regularity.
class AddIncomeRegularityController extends Controller
{
    
    	//	Adds an income regularity.
    	//	Requires income id
	public function AddIncomeRegularity($incomeID, $off){
	
		//	Get the drop down value
		$dropDownValue = request("drpRegularity");
		
		//	Weekly, monthly, annual or one off 
		//	0 false 1 true
		//	all false by default
		$isWeekly = 0;
		$isMonthly = 0;
		$isAnnual = 0;
		$isOneOff = 0;
		
		//	Checks to see if it is one off.
		if($off == true){
		
			$isOneOff = 1;
			
		} else {
		
			//	Select the regularity time
			switch($dropDownValue){
			
				case "weekly":
					$isWeekly = 1;
				break;
				
				case "monthly":
					$isMonthly = 1;
				break;
				
				case "annual":
					$isAnnual = 1;
				break;
				
				default:
					$isOneOff = 1;
				break;
				
			}
		
		}
		
		//	Model of income regularity
		$savedIncomeRegularity = new IncomeRegularity;
		
		//	Assign values
		$savedIncomeRegularity->isWeekly = $isWeekly;
		$savedIncomeRegularity->isMonthly = $isMonthly;
		$savedIncomeRegularity->isAnnual = $isAnnual;
		$savedIncomeRegularity->isOneOff = $isOneOff;
		$savedIncomeRegularity->incomeID = $incomeID;
		
		//	Add to database.
		$savedIncomeRegularity->save();
			
		//	Reference the income with the income regularity
		$savedIncomeRegularityRef = new IncomeRegularityBelongsTo;
		
		//	Assign attributes
		$savedIncomeRegularityRef->incomeID = $incomeID;
		$savedIncomeRegularityRef->incomeRegularityID = $savedIncomeRegularity->id;
		
		//	Save the reference.
		$savedIncomeRegularityRef->save();
		
	}
    
}
