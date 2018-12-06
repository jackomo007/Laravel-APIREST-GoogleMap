<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'address', 'latitude', 'longitude', 'user_id'
    ];
    protected $table = 'gmaps_geocache';

    public function user(){

        return $this->belongsTo('App\User');

    }


}
