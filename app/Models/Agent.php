<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $fillable = ["name", "email", "number", "area", "address", "gst", "areaofservice", "servicestaken", "commission",];
    protected $table = "agent";

}