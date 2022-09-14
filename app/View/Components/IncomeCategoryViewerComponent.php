<?php

namespace App\View\Components;

use Illuminate\View\Component;

//	auth
use Illuminate\Support\Facades\Auth;

//	Select income category viewer controller
use App\Http\Controllers\SelectIncomeCategoryViewerController;

class IncomeCategoryViewerComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     
     	public $incomeCategories;
	
	public function __construct()
	{
		$this->GetIncomeCategoryBT();
	}
    
	public function GetIncomeCategoryBT(){
	
		$uid = Auth::user()->id;
		
		$sicvc = new SelectIncomeCategoryViewerController();
		
		$ricbt =  $sicvc->SelectAllIncomeCategoriesByUserID($uid);
		
		$this->incomeCategories = $ricbt;
		
		
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.income-category-viewer-component');
    }
}
