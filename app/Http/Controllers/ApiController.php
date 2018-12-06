<?php

namespace App\Http\Controllers;

use App\Map;
use App\User;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index()
    {
        $coordinates = Map::with('user')->get();

        return response()->json($coordinates);
    }

    public function filter($id)
    {
        $coordinates = DB::table('gmaps_geocache')->where('user_id','=', $id)->get();

        return response()->json($coordinates);
    }
}
