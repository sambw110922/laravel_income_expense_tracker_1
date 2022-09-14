<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//	Income category belongs to 
class IncomeCategory_BT extends Model
{

/*


        Schema::create('incomeCategory_BT', function (Blueprint $table) {
            $table->id();
            $table->foreignId("incomeCategoryID")->constrained("incomeCategory");
            $table->foreignId("userID")->constrained("users");
        }); 


*/

    public $timestamps = false;
    
    //	The table 
    protected $table = "incomeCategory_BT";
    
    //	Has an ID
    protected $primaryKey = "id";
    
    //	Incrementing id
    public $incrementing = true;
    
    //	Fillable data attributes
    protected $fillable = [
    	"incomeCategoryID",
    	"userID"
    ]; 

}
