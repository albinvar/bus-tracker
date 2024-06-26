<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Http\Requests\StoreBusRequest;
use App\Http\Requests\UpdateBusRequest;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buses', [
            'buses' => Bus::all(),
        ]);
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
    public function store(StoreBusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        return view('show-bus', [
            'bus' => $bus->load('locationLogs'),
        ]);
    }

    /**
     * Display the live location of the bus.
     */
    public function location(Bus $bus)
    {
        return view('map', [
            'bus' => $bus->load('locationLogs'),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusRequest $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        //
    }
}
