<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//	Represents an income regularity belongs to 
class IncomeRegularityBelongsTo extends Model
{
    //use HasFactory;
    
    public $timestamps = false;
    
    //	The table 
    protected $table = "incomeRegularity_BT";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"incomeID",
    	"incomeRegularityID"
    ]; 
    
}
