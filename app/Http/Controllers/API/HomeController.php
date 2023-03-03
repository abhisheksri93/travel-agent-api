<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendQuote(Request $request)
    {
        $url = 'https://api.staging.suntransfers.biz/authentication';

        $data = array(
            'username' => 'api@paygrid.eu',
            'password' => 'Test@ST2022'
        );

        $body = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Accept: application/json',
                'Content-Type: application/json'
            )
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);
        $quote = json_decode($response);

        if($this->validate($request, [
            "origin" => "required",
            "destination" => "required",
            "passengers" => "required",
            "outwardDate" => "required",
            "returnDate" => "required",
            
        ])){

            $url = 'https://api.staging.suntransfers.biz/v1/quotes';
        
            $data = array(
                'currency' => $request->currency,
                'origin' => $request->origin,
                'destination' => $request->destination,
                'passengers' => $request->adults . ' ' . $request->childs . ' ' . $request->infants,
                'outwardDate' => $request->outwardDate,
                'returnDate' => $request->returnDate,
                'exchangeCurrency' => $request->exchangeCurrencies,
            );
    
            $body = json_encode($data);
    
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Accept: application/json',
                    'Content-Type: application/json',
                    "Authorization: Bearer " . $quote->info->token,
                )
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
            $result = curl_exec($ch);
            $show = json_decode($result);
            curl_close($ch);
            echo "<pre>";
            print_r($show);
            die();
            return view('transferResult');
            //echo $result;
        }else{
            return $this->sendError('Error.',['error'=>'Error']);
        }

        

    }
}
