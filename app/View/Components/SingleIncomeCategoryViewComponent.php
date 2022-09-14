<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SingleIncomeCategoryViewComponent extends Component
{

	public $incatID;
	public $incatName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
	public function __construct($incatID, $incatName)
	{
		
		$this->incatID = $incatID;
		$this->incatName = $incatName;
		
	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.single-income-category-view-component');
    }
}
