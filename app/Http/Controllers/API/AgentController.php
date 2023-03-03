<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgentResource;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $agents = Agent::
            where(function ($query) use ($request) {
                if ($request->has("search") and !empty($request->search)) {
                    $query->where("name", "LIKE", $request->search . "%")
                        ->orWhere("number", "LIKE", $request->search . "%")
                        ->orWhere("email", "LIKE", "%" . $request->search . "%");
                }
            })
            ->paginate(2);


        return AgentResource::collection($agents)
            ->response()->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "area" => "required",
            "address" => "required",
            "gst" => "required",
            "areaofservice" => "required",
            "servicestaken" => "required",
            "commission" => "required",
        ]);

        $agent = new Agent;
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->number = $request->number;
        $agent->area = $request->area;
        $agent->address = $request->address;
        $agent->gst = $request->gst;
        $agent->areaofservice = $request->areaofservice;
        $agent->servicestaken = $request->servicestaken;
        $agent->commission = $request->commission;
        $agent->save();
        return response()->json(['message' => "Agent Added succesfully"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  Agent  $agents
     * @return \Illuminate\Http\Response
     */
    public function show($agents)
    {
        $agents = Agent::find($agents);
        if ($agents) {
            return response()->json(['agents' => $agents], 200);
        } else {
            return response()->json(['message' => 'No Agents Found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Agent  $agents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agents)
    {
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "number" => "required",
            "area" => "required",
            "address" => "required",
            "gst" => "required",
            "areaofservice" => "required",
            "servicestaken" => "required",
            "commission" => "required",
        ]);

        $agents->update([
            "name" => $request->name,
            "email" => $request->email,
            "number" => $request->number,
            "area" => $request->area,
            "address" => $request->address,
            "gst" => $request->gst,
            "areaofservice" => $request->areaofservice,
            "servicestaken" => $request->servicestaken,
            "commission" => $request->commission,
        ]);

        return (new AgentResource($agents))
            ->response()->setStatusCode(Response::HTTP_OK);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Agent $agents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agents)
    {

        $agents->delete();
        return (new AgentResource($agents))
            ->response()->setStatusCode(Response::HTTP_OK);
    }
   
}