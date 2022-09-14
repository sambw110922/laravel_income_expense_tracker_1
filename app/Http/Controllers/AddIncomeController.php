<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	Use the add income regularity controller
use App\Http\Controllers\AddIncomeRegularityController;

//	This class adds an income to the database.
class AddIncomeController extends Controller
{
    
    //	Adds an income into the database;
    public function AddAnIncome(){
    	
    	//	get the user id
    	$userID = Auth::user()->id;
    	
    	//	Get the data from form.
    	$incomeName = request("txtIncomeName");
    	$incomeValue = request("txtAmmount");
    	
    	//	False by default
    	$isOneOff = false;
    	
    	//	If this is checked, then set to true
    	if(request("chkIsOneOff") == "isOneOff"){
    		$isOneOff = true;
    	}
    	
    	
    	//	Make a new income.
    	$savedIncome = new Income;
    	
    	//	Assign income.
    	$savedIncome->income_name = $incomeName;
    	$savedIncome->income_value = $incomeValue;
    	$savedIncome->isOneOff = $isOneOff;
    	
    	//	Save the income
    	$savedIncome->save();
    	
    	//	Add a new income regularity controller instance
    	$airc = new AddIncomeRegularityController();
    	
    	//	Get ID of last saved income.
 	$idOfLastSaved = $savedIncome->id;
    	
    	//	Add the income regularity.
    	$airc->AddIncomeRegularity($idOfLastSaved, $isOneOff);
    	
    	//	Reference the new income with the user
    	$savedIncomeRef = new IncomeBelongsTo;
    	
    	//	Get attributes
    	$savedIncomeRef->userID = $userID;
    	$savedIncomeRef->incomeID = $savedIncome->id;
    	
    	//	Save the reference
    	$savedIncomeRef->save();
    	
    	
    }
    
}
