<?php

namespace App\View\Components;

use Illuminate\View\Component;

//	auth
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ExpenseViewerController;

class SelectAllExpenseComponent extends Component
{

	public $results;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
	$this->GetAllExpenses();
    }
    
	public function GetAllExpenses(){

		$uid = Auth::user()->id;
		
		$evc = new ExpenseViewerController();
		
		$res = $evc->SelectExpensesByUserId($uid);
		
		$this->results = $res;

	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-all-expense-component');
    }
}
