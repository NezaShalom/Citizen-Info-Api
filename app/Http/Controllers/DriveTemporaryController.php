<?php

namespace App\Http\Controllers;

use App\DriveTemporary as AppDriveTemporary;
use DriveTemporary;
use Illuminate\Http\Request;

class DriveTemporaryController extends Controller
{
    public function listlostpermit()
    {
        return response()->json(AppDriveTemporary::get(), 200);
    }
    public function userLostPermitByID($id)
    {
        return response()->json(AppDriveTemporary::find($id), 200);
    }
}
