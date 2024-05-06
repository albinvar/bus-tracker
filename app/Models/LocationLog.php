<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'location',
        'latitude',
        'longitude',
        'address',
        'speed',
        'battery',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function getLocation($latitude, $longitude): string
    {
        // get the location from latitude and longitude
        $url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=$latitude&lon=$longitude";

        // use http client to make the request
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);

        // return the location
        return $data['name'] . ', ' . $data['address']['village'];
    }
}
