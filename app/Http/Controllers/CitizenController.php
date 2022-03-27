<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Citizen;
use App\Minaloc;

class CitizenController extends Controller
{

    public function searchCitizen($id)
    {
        $citizen = Citizen::where('nid', $id)->get();
        return response()->json($citizen);
    }

    public function searchCitizenMinaloc($id)
    {
        $citizen_id = Citizen::where('nid', $id)->value('id');
        $citizenInfo = Minaloc::where('citizen_id', $citizen_id)->get();
        return response()->json($citizenInfo);
    }

    public function index()
    {
        return Citizen::all();
    }
}
