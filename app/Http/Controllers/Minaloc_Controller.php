<?php

namespace App\Http\Controllers;

use App\Minaloc;
use Illuminate\Http\Request;

class Minaloc_Controller extends Controller
{
    public function minaid()
    {
        return response()->json(Minaloc::get(), 200);
    }
    public function userByIDs($id)
    {
        return response()->json(Minaloc::find($id), 200);
    }
}
