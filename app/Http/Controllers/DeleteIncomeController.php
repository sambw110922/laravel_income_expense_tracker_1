<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//	Use auth
use Illuminate\Support\Facades\Auth;

//	Use income model
use App\Models\Income;

//	Use income belongs to model
use App\Models\IncomeBelongsTo;

//	Use income regularity model
use App\Models\IncomeRegularity;

//	Use income regularity belongs to model
use App\Models\IncomeRegularityBelongsTo;

//	Select an income.
use App\Http\Controllers\SelectIncomeController;

//	Select an income belongs to.
use App\Http\Controllers\SelectIncomeBelongsToController;

//	Select an income regularity 
use App\Http\Controllers\SelectIncomeRegularity;

//	Select an income regularity belongs to
use App\Http\Controllers\SelectIncomeRegularityBelongsToController;

//	Delete a belongs to controller.
use App\Http\Controllers\DeleteIncomeBelongsToController;

//	Deletes an income
class DeleteIncomeController extends Controller
{

	//	Select income controller
	private $sic;
	
	//	Select income belongs to controller
	private $sibtc;
	
	//	Select income regularity controller
	private $sirc;
	
	//	Select income regularity belongs to controller
	private $sirbtc;
	
	//	Delete income regularity belongs to 
	private $dirbtc;
	
	//	Delete income belongs to controller
	private $dibtc;
	
	//	The user id.
	private $userid;
	
	//	The income .
	private $income;
	
	//	Income belongs to 
	private $incomeBelongsTo;
	
	//	Income regularity.
	private $incomeRegularity;
	
	//	Income regularity belongs to
	private $incomeRegularityBelongsTo;
	
	//	The requested ID 
	private $requestedID;
	
	//	Sets up controllers
	private function SetupControllers(){

	    	$this->sic = new SelectIncomeController();

	    	$this->sibtc = new SelectIncomeBelongsToController();

	    	$this->sirbtc = new SelectIncomeRegularityBelongsToController();

	    	$this->sirc = new SelectIncomeRegularityController();
	    	
	    	$this->dirbtc = new DeleteIncomeRegularityBelongsToController();

	    	$this->dibtc = new DeleteIncomeBelongsToController();
	    	
	    	$this->dirc = new DeleteIncomeRegularityController();
	
	}
	
	//	Get ID references.
	private function GetIDReferences(){
  
	    	//	Get the user id
	    	$this->userID = Auth::user()->id;
	    	
	    	//	The requested income id
	    	$this->requestedID = request("incomeid");
	
	}
	
	//	Gets the income reference and income id
	private function GetIncome(){
	
	    	//	The income object by the id
	    	$this->income = $this->sic->SelectIncomeByID($this->requestedID);
	    
	    	
	}
	
	//	Get the income belongs to reference
	private function GetIncomeBelongsTo(){
	
	    	//	Get the selected income belongs to by income id
    		$this->incomeBelongsTo = $this->sibtc->SelectIncomeBelongsToByIncomeID($this->income->id);
    		
	}
	
	//	Income regularity references
	private function GetIncomeRegularityReferences(){
	
	    	//	Get the selected income regularity belongs to
	    	$this->incomeRegularityBelongsTo = $this->sirbtc->SelectIncomeRegularityByIncomeID($this->income->id);
	    	
	    	//	Get the income regularity
	    	$this->incomeRegularity = $this->sirc->SelectIncomeRegularityByIncomeID($this->income->id);
	
	}
	
	//	Do the deletions proper.
	private function DeleteProper(){
	
		$actualResult = false;
	
		//	Delete an income belongs to
    		$deleteIncomeBelongsToResult = $this->dibtc->DeleteIncomeBelongsTo($this->incomeBelongsTo);
    		
    		//	Delete an income regularity belongs to
    		$deleteIncomeRegularityBelongsToResult = $this->dirbtc->DeleteIncomeRegularityBelongsTo($this->incomeRegularityBelongsTo);
    		
    		//	Deletes an income regularity proper
    		$deleteIncomeRegularityResult = $this->dirc->DeleteIncomeRegularity($this->incomeRegularity);
    		
	    	//	Delete the income proper.
	    	$deleteIncomeResult = $this->income->delete();
	    	
	    	//	Check all results.
	    	if($deleteIncomeBelongsToResult == true && $deleteIncomeRegularityBelongsToResult == true && $deleteIncomeRegularityResult == true && $deleteIncomeResult == true){
	    		
	    		$actualResult = true;	
	    		
	    	}
		    	
		return $actualResult;
	
	}
	
    
	//	Deletes an income and it's references
	public function DeleteAnIncome(){
    
		//	Set up the controllers
    		$this->SetupControllers();
    	
	    	//	Gets the ID .
	    	$this->GetIDReferences();

	    	//	Get the income 
	    	$this->GetIncome($this->requestedID);

		//	Get the income belongs to .
	    	$this->GetIncomeBelongsTo();

		//	Income regularity .
	    	$this->GetIncomeRegularityReferences();

		//	Deletes the income proper.
		$deleteIncomeResult = $this->DeleteProper();
		
		//	If delete was ok, return to dashboard
		if($deleteIncomeResult == true){
			return view("dashboard");
		} else {
			return "error";
		}
	    	
	    	
	    }
    
}
