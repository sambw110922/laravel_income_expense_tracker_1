<?php

namespace App\View\Components;

use Illuminate\View\Component;

//	Need to get the income regularity viewer
use App\Http\Controllers\IncomeReguarirtyViewerController;

//	Determines if a view is weekly, monthly, annual or is one off.
class IncomeRegularityViewerComponent extends Component
{


	//	Requires the income id.
	public $incomeid;
	
	//	If is a weekly, monthly, annual or one off as a string.
	public $regularityMessage;
	
	//	Constructor
	public function __construct($incomeid){
		
		$this->incomeid = $incomeid;
		
		$this->GetIncomeRegularity();
		
	}
	
	//	Get the income regularity.
	public function GetIncomeRegularity(){

		//	Get the regularity viewer controller
		$irvc = new IncomeReguarirtyViewerController();
		
		//	Get the regularity by the id and pass the income id
		$incregs = $irvc->SelectIncomeRegularityById($this->incomeid);
		
		//	Set the default message
		$msg = "IS ONE OFF";

		//	First encode according to json
		$incregs_encoded = json_encode($incregs);
		
		//	Then deocde json as an array
		$incregs_decoded = json_decode($incregs_encoded, true);
		
		//	If the decoded is not null
		if($incregs_decoded != null){
			
			//	Is weekly
			if($incregs_decoded["isWeekly"] > 0){
				$msg = "WEEKLY";
			}
			
			//	Is monthly
			if($incregs_decoded["isMonthly"] > 0){
				$msg = "MONTHLY";
			}
			
			//	Is annual
			if($incregs_decoded["isAnnual"] > 0){
				$msg = "ANNUAL";
			}
			
			//	Is one off
			if($incregs_decoded["isOneOff"] > 0){
				$msg = "IS ONE OFF";
			}
			
			//	Set the regularity message
			$this->regularityMessage = $msg;
			
		}

		
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.income-regularity-viewer-component');
    }
}
