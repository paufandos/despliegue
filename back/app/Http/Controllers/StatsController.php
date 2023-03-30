<?php

namespace App\Http\Controllers;

use App\Models\AverageImportPerRefugee;
use App\Models\ImportPerCountry;
use App\Models\ImportPerOng;
use App\Models\RefugeeCountPerConflict;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function statsPerOng()
    {
        return response()->json(ImportPerOng::all(), 200);
    }

    public function statsPerCountry()
    {
        return response()->json(ImportPerCountry::all(), 200);
    }

    public function statsPerConflict()
    {
        return response()->json(RefugeeCountPerConflict::all(), 200);
    }

    public function statsPerRefugee()
    {
        return response()->json(AverageImportPerRefugee::all(), 200);
    }
}
