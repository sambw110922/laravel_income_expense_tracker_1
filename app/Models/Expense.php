<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//	Represents an expense.
class Expense extends Model
{
    //use HasFactory;
    
    public $timestamps = false;
    
    //	The table 
    protected $table = "expenses";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"expense_name", 
    	"expdense_value",
    	"isOneOff"
    ];  
    
}
