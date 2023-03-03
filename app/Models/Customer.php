<?php

namespace App\Models;

use App\Http\Controllers\API\QuoteController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["title", "name","surname","email","mobile_country_code","mobile_phone"];
    protected $table = "customer";

    public function employee_department(){
        return $this->hasOne(QuoteController::class,"booking_id","id");
    }

}
