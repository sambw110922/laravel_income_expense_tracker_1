<?php

namespace App\View\Components;

use Illuminate\View\Component;

//use App\Http\Controllers\SelectIncomeController;

//	Edit an income component.
class editIncomeComponent extends Component
{

	//	Get the income id.
	public $incomeid;
	
	public $income_name;
	public $income_value;
	public $regularity;

	 /**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct($incomeid, $incomename, $incomevalue)
	{
		$this->incomeid = $incomeid;
		
		$this->income_name = $incomename;
		$this->income_value = $incomevalue;
		
		
	}
	
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit-income-component');
    }
}
