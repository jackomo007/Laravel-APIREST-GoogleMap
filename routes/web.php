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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/', function () {
//    $config['center'] = '-3.77262142697798, -38.51417962284637';
//    $config['zoom'] = '16';
//    $config['map_height'] = '500px';
//    $config['geocodeCaching'] = true;
//    $config['scrollwheel'] = false;
//
//    /*
//     * Initialize GMaps and load the parameters of set
//     */
//    $GMap = new GMaps;
//    $GMap->initialize($config);
//
//    /*
//     * Add Marker
//     */
//    $coordinates = DB::table('gmaps_geocache')->get();
//
//    foreach ($coordinates as $coordinate) {
//
//        $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
//        $marker['infowindow_content'] = $coordinate->address;
//        $GMap->add_marker($marker);
//
//    }
//
//    /*
//     * Create the map
//     */
//    $map = $GMap->create_map();
//
//    return view('welcome')->with('map',$map);
//});
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
