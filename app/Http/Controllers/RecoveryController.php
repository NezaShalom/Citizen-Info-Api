<?php

namespace App\Http\Controllers;

use App\Citizen;
use App\Recovery;
use Illuminate\Http\Request;

class RecoveryController extends Controller
{
    public function index()
    {
        return Recovery::all();
    }

    public function searchRecoveryID($id)
    {
        $citizen_id = Citizen::where('nid', $id)->value('id');
        $recoveryInfo = Recovery::where('citizen_id', $citizen_id)->get();
        return response()->json($recoveryInfo);
    }

    public function searchRecovery($id)
    {
        $recovery = Citizen::where('nid', $id)->get();
        return response()->json($recovery);
    }
}
