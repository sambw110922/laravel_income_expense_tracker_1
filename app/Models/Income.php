<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//	Represents an income.
class Income extends Model
{
    //use HasFactory;
    
    public $timestamps = false;
    
    //	The table 
    protected $table = "incomes";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"income_name", 
    	"income_value",
    	"isOneOff"
    ];   
    
    
}
