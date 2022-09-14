<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use income regularity model
use App\Models\IncomeRegularity;

//	Delete an income regularity
class DeleteIncomeRegularityController extends Controller
{
 
 
 	//	Deletes an income regularity
	public function DeleteIncomeRegularity($ir){
	
		$result = false;
		
		$result = $ir->delete();
		
		return $result;
	
	}
 
}
