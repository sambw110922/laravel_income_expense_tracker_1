<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseBelongsTo extends Model
{
    //use HasFactory;
    
    public $timestamps = false;
    
    //	The table 
    protected $table = "expense_BT";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"expenseID", 
    	"userID"
    ];  
}
