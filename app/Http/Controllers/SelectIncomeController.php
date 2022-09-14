<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

class SelectIncomeController extends Controller
{
    
    //	Selects an income by ID
    public function SelectIncomeByID($requestedID){
    	
    	$income = Income::find($requestedID);
    	
    	return $income;    	
    	
    }
    
}
