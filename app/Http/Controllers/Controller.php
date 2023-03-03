<?php

namespace App\Http\Controllers;

use Database\Seeders\FormSeries;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function createNewReferenceId($referFor = NULL)
    {
        $seriesDetails = FormSeries::where('form', '=', $referFor)->get()->first();

        $Temp = $seriesDetails->series + 1;
        $random = $this->randomDigit(5);
        $reference_id = ltrim($random . $Temp, "0");

        FormSeries::where('form', '=', $referFor)
            ->update(['series' => $Temp]);

        return $reference_id;
    }

    public function randomDigit($length)
    {
        $numbers = range(1, 9);
        shuffle($numbers);
        $digits = '';
        for ($i = 0; $i < $length; $i++)
            $digits .= $numbers[$i];
        return $digits;
    }
}