<?php

namespace App\View\Components;

use Illuminate\View\Component;

//	database
use Illuminate\Support\Facades\DB;

class IncomeCategoryDropdownComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     
	public $incomeCategories;
	
	public function __construct(){
		
		$this->incomeCategories = array();
		
		
		
	}
	
	//	Get the income categories.
	public function GetIncomeCategories(){
	
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.income-category-dropdown-component');
    }
}
