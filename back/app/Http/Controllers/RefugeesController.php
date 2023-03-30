<?php

namespace App\Http\Controllers;

use App\Models\Refugee;
use DateTime;
use DateTimeInterface;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class RefugeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Refugee::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $refugee = new Refugee;

        $refugee->name = $request->name;
        $refugee->surnames = $request->surnames;
        $refugee->sex = $request->sex;
        $refugee->birth_date = $request->birth_date;

        $bithday = date_create_from_format('d-m-Y', strtotime($request->birth_date));
        $now = new DateTime(now());

        if ($bithday > $now) {
            throw new ValidationException;
        }
        $refugee->country = $request->country;
        $refugee->conflict = $request->conflict;
        $refugee->refugee_camp = $request->refugee_camp;

        return response()->json($refugee->save(), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Refugee::findOrFail($id), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $refugee = Refugee::findOrFail($id);

        $refugee->name = $request->name;
        $refugee->surnames = $request->surnames;
        $refugee->sex = $request->sex;
        $refugee->birth_date = $request->birth_date;
        $refugee->country = $request->country;
        $refugee->conflict = $request->conflict;
        $refugee->refugee_camp = $request->refugee_camp;

        return response()->json($refugee->save(), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $refugee = Refugee::findOrFail($id);

        return response()->json($refugee->delete(), 200);
    }
}
