<?php

use Illuminate\Support\Facades\Route;

//	Incomes controllers
use App\Http\Controllers\SelectIncomeController;
use App\Http\Controllers\AddIncomeController;
use App\Http\Controllers\DeleteIncomeController;
use App\Http\Controllers\EditIncomeController;
use App\Http\Controllers\AddIncomeCategoryController;

//	Expenses controllers
use App\Http\Controllers\AddExpenseController;
use App\Http\Controllers\DeleteExpenseController;
use App\Http\Controllers\SelectExpenseController;
use App\Http\Controllers\EditExpenseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//	*******************************

//	Income panel
Route::get("/incomepanel", function(){
	return view("incomespanel");
})->middleware(["auth"])->name("dashboard");

//	Adds an income
Route::post("/addincome", [AddIncomeController::class, 'AddAnIncome'])->middleware(["auth"])->name("dashboard");

//	Go to edit form.
Route::get("/editincomeform/{incomeid}", function(){
	
	//	Create income controller
	$sic = new SelectIncomeController();
	
	//	Get the requested id
	$requestedID = request("incomeid");
	
	//	Get the income by the id requested
	$income = $sic->SelectIncomeByID($requestedID);

	//	fill in the form.
	return view("editincomes", [
		"income" => $income,
		"incomeid" => $requestedID
	]);
	
	
})->middleware(["auth"])->name("dashboard");

//	EditIncomeController
Route::post("/editincome", [EditIncomeController::class, 'EditAnIncome'])->middleware(["auth"])->name("dashboard");

//	Delete incomes
Route::get("/deleteincome/{incomeid}", [DeleteIncomeController::class, "DeleteAnIncome"])->middleware(["auth"])->name("dashboard");

//	***********************************

//	Expense panel
Route::get("/expensespanel", function(){
	return view("expensespanel");
})->middleware(["auth"])->name("dashboard");

//	Adds an expense
Route::post("/addexpense", [AddExpenseController::class, 'AddAnExpense'])->middleware(["auth"])->name("dashboard");

//	Edit expense
Route::get("/editexpenseform/{expenseid}", function(){

	//	Create expense controller
	$sec = new SelectExpenseController();
	
	//	Get the requested id
	$requestedID = request("expenseid");
	
	//	Get the income by the id requested
	$expense = $sec->SelectExpenseByID($requestedID);
	
	//	fill in the form.
	return view("editexpenses", [
		"expense" => $expense,
		"expenseid" => $requestedID
	]);
	

})->middleware(["auth"])->name("dashboard");

//	EditExpenseController
Route::post("/editexpense", [EditExpenseController::class, 'EditAnExpense'])->middleware(["auth"])->name("dashboard");

//	Delete expense
Route::get("/deleteexpense/{expenseid}", [DeleteExpenseController::class, "DeleteAnExpense"])->middleware(["auth"])->name("dashboard");

//	************************************

//	Income categories panel
Route::get("/incomecategoriespanel", function(){
	return view("incomecategoriespanel");
})->middleware(["auth"])->name("dashboard");

//	Add the income category 
Route::post("/addincomecategory", [AddIncomeCategoryController::class, "AddAnIncomeCategory"])->middleware(["auth"])->name("dashboard");


require __DIR__.'/auth.php';
