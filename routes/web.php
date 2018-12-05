<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use FarhanWazir\GoogleMaps\GMaps;

Route::get('/', function () {
    $config['center'] = '-3.77262142697798, -38.51417962284637';
    $config['zoom'] = '16';
    $config['map_height'] = '500px';
//    $config['map_width'] = '500px';
    $config['scrollwheel'] = false;

    /*
     * Initialize GMaps and load the parameters of set
     */
    $GMap = new GMaps;
    $GMap->initialize($config);

    /*
     * Add Marker
     */
    $marker['position'] = '-3.77262142697798, -38.51417962284637';
    $marker['infowindow_content'] = 'Home sweet home';
    $GMap->add_marker($marker);

    $marker['position'] = '-3.7708024359243923, -38.5163394855723';
    $marker['infowindow_content'] = 'Farmacia';
    $marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/blue-dot.png';
    $GMap->add_marker($marker);

    /*
     * Create the map
     */
    $map = $GMap->create_map();

    return view('welcome')->with('map',$map);
});
