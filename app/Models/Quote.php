<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ["currency", "origin", "destination", "passengers", "outwardDate", "returnDate", "exchangeCurrencies",];
    protected $table = "quote";

}
