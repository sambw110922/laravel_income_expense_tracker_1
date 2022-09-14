<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use income regularity belongs to model
use App\Models\IncomeRegularityBelongsTo;


//	Deletes an income regularity belongs to
class DeleteIncomeRegularityBelongsToController extends Controller
{

	//	Deletes an income regulrity belongs to
	public function DeleteIncomeRegularityBelongsTo($increg){
	
		$result = false;
		
		$result = $increg->delete();
		
		return $result;
	
	}

}
