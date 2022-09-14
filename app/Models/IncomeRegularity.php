<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//	Represents an income regularity.
class IncomeRegularity extends Model
{

    //use HasFactory;
    
    public $timestamps = false;
    
    //	The table 
    protected $table = "incomeRegularity";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"isWeekly",
    	"isMonthly",
    	"isAnnual",
    	"isOneOff",
    	"incomeID"
    ];  

}
