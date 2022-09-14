<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Http\Controllers\IncomesViewerController;

//	auth
use Illuminate\Support\Facades\Auth;

//	This class selects all incomes.
class SelectAllIncomeComponent extends Component
{

	public $results;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->GetAllIncome();
    }
    
	
	//	Get all the income by user
	public function GetAllIncome(){
		
		$uid = Auth::user()->id;
		
		$ivc = new IncomesViewerController();
		
		$res = $ivc->SelectIncomesByUserId($uid);
		
		$this->results = $res;
			
	}
    


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-all-income-component');
    }
}
