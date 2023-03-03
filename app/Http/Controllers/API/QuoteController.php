<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgentResource;
use App\Http\Resources\QuoteResource;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;




class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $agents = Quote::
    //         where(function ($query) use ($request) {
    //             if ($request->has("search") and !empty($request->search)) {
    //                 $query->where("name", "LIKE", $request->search . "%")
    //                     ->orWhere("number", "LIKE", $request->search . "%")
    //                     ->orWhere("email", "LIKE", "%" . $request->search . "%");
    //             }
    //         })
    //         ->paginate(2);
    //     // $response = $agents->request("suntransfer");

    //     return AgentResource::collection($agents)
    //         ->response()->setStatusCode(Response::HTTP_OK);
    // }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display a listing of the resource.
     * @param  Booking  $bookings
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request, $bookings)
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

        // find User
        $url = 'https://api.staging.suntransfers.biz/v1/bookings';

        $data = array(
            'ref' => $request->ref
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

        $response = curl_exec($ch);

        curl_close($ch);
        // $quote = json_decode($response);
        echo $response;


        $bookings = Booking::find($bookings);
        if ($bookings) {
            return response()->json(['booking' => $bookings], 200);
        } else {
            return response()->json(['message' => 'No booking Found'], 404);
        }

    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookingCreate(Request $request)
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


        // Booking create
        $booking = new Booking;
        $booking->quote_id = $request->quote_id;
        $booking->hash = $request->hash;
        $booking->airline_code = $request->airline_code;
        $booking->flight_number = $request->flight_number;
        $booking->airport_code = $request->airport_code;
        $booking->flight_date_time = $request->flight_date_time;
        $booking->name = $request->name;
        $booking->address = $request->address;
        $booking->pickup_date_time = $request->pickup_date_time;
        $booking->code = $request->code;
        $booking->code = $request->quantity;
        $booking->save();

        $passenger = new Passenger;
        $passenger->title = $request->title;
        $passenger->booking_id = $booking->id;
        $passenger->name = $request->name;
        $passenger->surname = $request->surname;
        $passenger->email = $request->email;
        $passenger->mobile_country_code = $request->mobile_country_code;
        $passenger->mobile_phone = $request->mobile_phone;
        $passenger->save();

        $customer = new Customer;
        $customer->title = $request->title;
        $customer->booking_id = $booking->id;
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->mobile_country_code = $request->mobile_country_code;
        $customer->mobile_phone = $request->mobile_phone;
        $customer->save();

        $url = 'https://api.staging.suntransfers.biz/v1/bookings';
        $data = array(
            "quote_id" => $request->quote_id,
            "offer" => [
                "hash" => $request->hash,
            ],
            "customer" => [
                "title" => $request->title,
                "name" => $request->name,
                "surname" => $request->surname,
                "email" => $request->email,
                "mobile_country_code" => $request->mobile_country_code,
                "mobile_phone" => $request->mobile_phone,
            ],
            "lead_passenger" => [
                "title" => "Mr",
                "name" => "John",
                "surname" => "Doe",
                "email" => "booking@suntransfers.com",
                "mobile_country_code" => "ES",
                "mobile_phone" => "612345678",
            ],
            "gold_protection" => true,
            "sms_notification" => true,
            "passengers" => [
                "total" => 4,
                "children_info" => [
                    [
                        "birthday" => "2019-08-08"
                    ],
                    [
                        "birthday" => "2019-01-01"
                    ]
                ]
            ],
            "currency" => "EUR",
            "language" => "en",

            'transfers' => [
                [
                    "outward" => [
                        "flight" => [
                            "airline_code" => $request->airline_code,
                            "flight_number" => $request->flight_number,
                            "airport_code" => $request->airport_code,
                            "flight_date_time" => $request->flight_date_time,
                        ]
                    ],
                    "destination" => [
                        "accommodation" => [
                            "name" => $request->names,
                            "address" => $request->address,
                            "pickup_date_time" => $request->pickup_date_time,
                        ]
                    ],
                    "purchased_extras" => [
                        [
                            "code" => $request->code,
                            "quantity" => $request->quantity,
                        ]
                    ]
                ],
                [
                    "outward" => [
                        "accommodation" => [
                            "name" => "Hotel Wella",
                            "address" => "address, Maspalomas, 00173, ES",
                            "pickup_date_time" => "2019-12-29T15:35:00"
                        ]
                    ],
                    "destination" => [
                        "flight" => [
                            "airline_code" => "LS",
                            "flight_number" => "LS332",
                            "airport_code" => "LHR",
                            "flight_date_time" => "2019-12-29T18:35:00"
                        ]
                    ],
                    "purchased_extras" => [
                        [
                            "code" => "golf_bag",
                            "quantity" => 1
                        ]
                    ]
                ]
            ],
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

        curl_close($ch);
        // $booking = json_decode($result);
        echo $result;
        // echo "<pre>";
        // print_r($booking);
        // die();
    }

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

        $url = 'https://api.staging.suntransfers.biz/v1/quotes';
        $data = array(
            'currency' => $request->currency,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'passengers' => $request->passengers,
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
       
        echo $result;
    
    }
    public function index() {
        $logs = Log::where('user_id',auth()->user()->id)
               ->orderBy('created_at', 'DESC')->get();
     
        return view('api.logs', compact('logs'));
     }



    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "quote_id" => "required",
            "hash" => "required",
            "airline_code" => "required",
            "flight_number" => "required",
            "airport_code" => "required",
            "flight_date_time" => "required",
            "name" => "required",
            "pickup_date_time" => "required",
            "code" => "required",
            "quantity" => "required",
            "title" => "required",
            "name" => "required",
            "address" => "required",
            "pickup_date_time" => "required",
            "flight_date_time" => "required",
            "name" => "required",
            "pickup_date_time" => "required",
            "code" => "required",
        ]);

        $booking = new Booking;
        $booking->quote_id = $request->quote_id;
        $booking->hash = $request->hash;
        $booking->airline_code = $request->airline_code;
        $booking->flight_number = $request->flight_number;
        $booking->airport_code = $request->airport_code;
        $booking->flight_date_time = $request->flight_date_time;
        $booking->name = $request->name;
        $booking->address = $request->address;
        $booking->pickup_date_time = $request->pickup_date_time;
        $booking->code = $request->code;
        $booking->quantity = $request->quantity;
        $booking->save();

        $passenger = new Passenger;
        $passenger->title = $request->title;
        $passenger->booking_id = $booking->id;
        $passenger->name = $request->name;
        $passenger->surname = $request->surname;
        $passenger->email = $request->email;
        $passenger->mobile_country_code = $request->mobile_country_code;
        $passenger->mobile_phone = $request->mobile_phone;
        $passenger->save();

        $customer = new Customer;
        $customer->title = $request->title;
        $customer->booking_id = $booking->id;
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->mobile_country_code = $request->mobile_country_code;
        $customer->mobile_phone = $request->mobile_phone;
        $customer->save();
        return response()->json(['message' => "Agent Added succesfully"], 200);
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
// public function edit($id)
// {
//     //
// }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  Agent  $agents
 * @return \Illuminate\Http\Response
 */
// public function update(Request $request, Agent $agents)
// {
//     $this->validate($request, [
//         "name" => "required",
//         "email" => "required",
//         "number" => "required",
//         "area" => "required",
//         "address" => "required",
//         "gst" => "required",
//         "areaofservice" => "required",
//         "servicestaken" => "required",
//         "commission" => "required",
//     ]);

//     $agents->update([
//         "name" => $request->name,
//         "email" => $request->email,
//         "number" => $request->number,
//         "area" => $request->area,
//         "address" => $request->address,
//         "gst" => $request->gst,
//         "areaofservice" => $request->areaofservice,
//         "servicestaken" => $request->servicestaken,
//         "commission" => $request->commission,
//     ]);

//     return (new AgentResource($agents))
//         ->response()->setStatusCode(Response::HTTP_OK);

// }

/**
 * Remove the specified resource from storage.
 *
 * @param  Agent $agents
 * @return \Illuminate\Http\Response
 */
// public function destroy(Agent $agents)
// {

//     $agents->delete();
//     return (new AgentResource($agents))
//         ->response()->setStatusCode(Response::HTTP_OK);
// }
}