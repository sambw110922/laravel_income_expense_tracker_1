<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	Delete an income belongs to by income belongs to reference.
class DeleteIncomeBelongsToController extends Controller
{
    
    	//	Deletes an incomebelongsto by income belongs to reference
	public function DeleteIncomeBelongsTo($ibt){
		
		$result = false;
		
		$result = $ibt->delete();
		
		return $result;		
		
	}
    
}
