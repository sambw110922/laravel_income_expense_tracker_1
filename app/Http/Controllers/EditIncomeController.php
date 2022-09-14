<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Income select controller
use App\Http\Controllers\SelectIncomeController;

//	Income regularity select controller
use App\Http\Controllers\SelectIncomeRegularityController;

//	Income regularity belongs to select controller
use App\Http\Controllers\SelectIncomeRegularityBelongsToController;

//	Edit income regularity controller
use App\Http\Controllers\EditIncomeRegularityController;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	Use income regularity model
use App\Models\IncomeRegularity;

//	Use income reguarity belongs to model
use App\Models\IncomeRegularityBelongsTo;

//	This class handles the edit function for incomes.
class EditIncomeController extends Controller
{

	//    Edits an income.
	public function EditAnIncome(){
	
		$id = request("txtIncomeid");
		
		//	Selects an income by id.
		$sibid = new SelectIncomeController();
		
		//	Get the income by id.
		$requestedIncome = $sibid->SelectIncomeByID($id);
		
		//	Get the income name
		$incomeName = request("txtIncomeName");
		
		//	Get the income value
		$incomeValue = request("txtAmmount");
		
		//	Get regularity
		$regularity = $requestedIncome->isOneOff;
		
		//	Update the model values
		$requestedIncome->income_name = $incomeName;
		$requestedIncome->income_value = $incomeValue;
		$requestedIncome->isOneOff = $regularity;
		
		//	Select Income Regularity Belongs To controller
		$sirbtc = new 	SelectIncomeRegularityBelongsToController();
			
		//	Get the income regularity belongs to model
		$incomeRegularityBelongsToM = $sirbtc->SelectIncomeRegularityByIncomeID($id);
			
		//	Select income regularity controller
		$sirc = new SelectIncomeRegularityController();
			
		//	Get the income regularity by id
		$requestedIncomeRegularity = $sirc->SelectIncomeRegularityByIncomeID($id);
		
		//	Get the result of the check box
		$checkboxResult = request("chkIsOneOff");
		
		//	Edit income regularity controller
		$eirc = new EditIncomeRegularityController();
		
		//	Update the income regularity
		$incomeRegularityUpdateTest = $eirc->EditAnIncomeRegularity($requestedIncomeRegularity, $checkboxResult);
		
		//	Attempt to update
		$updateResult = $requestedIncome->save();
		
		if($updateResult == true && $incomeRegularityUpdateTest == true){
			return "ok";
		} else {
			return "bad";
		}

	}
	
    
}
