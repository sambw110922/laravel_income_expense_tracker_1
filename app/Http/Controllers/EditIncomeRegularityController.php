<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use income regularity model
use App\Models\IncomeRegularity;

//	Edits an income regularity.
class EditIncomeRegularityController extends Controller
{
    
    	//	Updates an income regularity.
	public function EditAnIncomeRegularity($requestedIncomeRegularity, $checkboxResult){
	
		//	If being changed to one off
		if($checkboxResult == "isOneOff"){
		
			//	Change the income regularity properties
			$requestedIncomeRegularity->isOneOff = 1;
			$requestedIncomeRegularity->isWeekly = 0;
			$requestedIncomeRegularity->isMonthly = 0;
			$requestedIncomeRegularity->isAnnual = 0;
		
		} else {
			
			//	Get the drop box
			$drpRegularity = request("drpRegularity");
			
			//	Check the regularity drop down
			switch($drpRegularity){
				
				//	If weekly
				case"weekly":
				
					$requestedIncomeRegularity->isOneOff = 0;
					$requestedIncomeRegularity->isWeekly = 1;
					$requestedIncomeRegularity->isMonthly = 0;
					$requestedIncomeRegularity->isAnnual = 0;
				
				break;
				
				//	If monthly
				case "monthly":
				
					$requestedIncomeRegularity->isOneOff = 0;
					$requestedIncomeRegularity->isWeekly = 0;
					$requestedIncomeRegularity->isMonthly = 1;
					$requestedIncomeRegularity->isAnnual = 0;
				
				break;
				
				//	If annual
				case "annual":
				
					$requestedIncomeRegularity->isOneOff = 0;
					$requestedIncomeRegularity->isWeekly = 0;
					$requestedIncomeRegularity->isMonthly = 0;
					$requestedIncomeRegularity->isAnnual = 1;
				
				break;
			
			}
			
		}
		
		//	Attempt to update
		$incomeRegularityUpdateTest = $requestedIncomeRegularity->save();
		
		return $incomeRegularityUpdateTest;
	
	}
    
}
