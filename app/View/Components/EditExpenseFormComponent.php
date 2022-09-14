<?php

namespace App\View\Components;

use Illuminate\View\Component;

//	The logic for the expense form component.
class EditExpenseFormComponent extends Component
{

	//	Get the expense id.
	public $expenseid;

	public $expense_name;
	public $expense_value;
	public $regularity;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($expenseid, $expensename, $expensevalue)
    {
	$this->expenseid = $expenseid;
	
	$this->expense_name = $expensename;
	$this->expense_value = $expensevalue;
	
    }




    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit-expense-form-component');
    }
}
