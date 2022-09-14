<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	Selects income belongs to.
class SelectIncomeBelongsToController extends Controller
{
    
    //	Find an income belongs to by income id
    public function SelectIncomeBelongsToByIncomeID($requestedIncomeID){
    
    	$incomeBelongsTo = IncomeBelongsTo::where("incomeID", $requestedIncomeID)->first();
    	
    	return $incomeBelongsTo;  
    
    }
    
    //	Find all income belongs to by user ID.
    public function SelectIncomeBelongsToByUserID($requestedUserID){
    
    	$incomeBelongsTo = IncomeBelongsTo::where("userID", $requestedUserID)->first();
    	
    	return $incomeBelongsTo;  
    
    }
    
}
