<?php

namespace App\Http\Controllers;

use App\Models\LocationLog;
use App\Http\Requests\StoreLocationLogRequest;
use App\Http\Requests\UpdateLocationLogRequest;
use Illuminate\Http\Request;

class LocationLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the request
        $data = $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'location' => 'nullable',
            'latitude' => 'required',
            'longitude' => 'required',
            'speed' => 'nullable',
            'address' => 'nullable',
            'battery' => 'nullable',
        ]);

        // retrieve the location from latitude and longitude
        $res = $this->getLocation($data['latitude'], $data['longitude']);
        $data['location'] = $res['location'];
        $data['address'] = $res['address'];

        // create a new location log
        $locationLog = LocationLog::create($data);

        // return the location log
        return response()->json($locationLog);


    }

    /**
     * Display the specified resource.
     */
    public function show(LocationLog $locationLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocationLog $locationLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocationLogRequest $request, LocationLog $locationLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocationLog $locationLog)
    {
        //
    }

    /**
     * Get the location from latitude and longitude.
     */
    private function getLocation($latitude, $longitude): array
    {
        // get the location from latitude and longitude
        $url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude";

        // use http client to make the request
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);

        // return the location as an array
        return [
            'location' => (!empty($data['name']) ? $data['name'] . ', ' : '') . ($data['address']['village'] ?? $data['address']['town'] ?? $data['address']['city'] ?? $data['address']['county'] ?? $data['address']['state'] ?? $data['address']['country'] ?? ''),
            'address' => $data['display_name'],
        ];
    }
}
