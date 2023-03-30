<?php

namespace App\Http\Controllers;

use App\Models\ServiceResource;
use Illuminate\Http\Request;

class ServicesResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(ServiceResource::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $serviceResource = new ServiceResource;

        $serviceResource->name = $request->name;
        $serviceResource->ong = $request->ong;
        $serviceResource->cost = $request->cost;
        $serviceResource->date = $request->date;
        $serviceResource->refugees_camp = $request->refugees_camp;

        return response()->json($serviceResource->save(), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(ServiceResource::findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $serviceResource = ServiceResource::findOrFail($id);

        $serviceResource->name = $request->name;
        $serviceResource->ong = $request->ong;
        $serviceResource->cost = $request->cost;
        $serviceResource->date = $request->date;
        $serviceResource->refugees_camp = $request->refugees_camp;

        return response()->json($serviceResource->save(), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceResource = ServiceResource::findOrFail($id);

        return response()->json($serviceResource->delete(), 200);
    }
}
