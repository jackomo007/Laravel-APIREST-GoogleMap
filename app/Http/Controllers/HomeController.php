<?php

namespace App\Http\Controllers;

use App\Map;
use App\User;
use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $users = User::with('localizations')->get();

        /*
       * Set parameters
       */
        $config['center'] = '-3.7342702728959916, -38.511656276520114';
        $config['zoom'] = '12';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;
        $config['scrollwheel'] = false;

        /*
         * Initialize GMaps and load the parameters of set
         */
        $GMap = new GMaps;
        $GMap->initialize($config);

        /*
         * Show all Markers
         */
        if(is_null($id)){
            $coordinates = Map::with('user')->get();
        } else {
            $coordinates = DB::table('gmaps_geocache')->where('user_id','=', $id)->get();
        }

        foreach ($coordinates as $coordinate) {
            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = $coordinate->address;
            $GMap->add_marker($marker);
        }

        /*
         * Create the map
         */
        $map = $GMap->create_map();

        return view('home')->with('users', $users)->with('map', $map);
    }
}
