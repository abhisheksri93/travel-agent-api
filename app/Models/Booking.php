<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ["quote_id", "hash", "airline_code", "flight_number", "airport_code", "flight_date_time", "name", "address", "pickup_date_time", "code", "quantity"];
    protected $table = "booking";
}
