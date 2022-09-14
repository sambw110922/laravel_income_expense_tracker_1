<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{

    public $timestamps = false;
    
    //	The table 
    protected $table = "incomeCategory";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"category_name"
    ];  

}
