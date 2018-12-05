<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $config['center'] = '-3.77262142697798, -38.51417962284637';
        $config['zoom'] = '16';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;
        $config['scrollwheel'] = false;

        /*
         * Initialize GMaps and load the parameters of set
         */
        $GMap = new GMaps;
        $GMap->initialize($config);

        /*
         * Add Marker
         */
        $coordinates = DB::table('gmaps_geocache')->get();

        foreach ($coordinates as $coordinate) {

            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = $coordinate->address;
            $GMap->add_marker($marker);

        }

        /*
         * Create the map
         */
        $map = $GMap->create_map();

        return view('home')->with('map',$map);
    }
}
