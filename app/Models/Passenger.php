<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ["title", "name","surname","email","mobile_country_code","mobile_phone"];
    protected $table = "passenger";
}
