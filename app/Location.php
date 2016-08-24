<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Location extends Model
{
    protected $fillable = ['name','spots','address','phone','logo','img','about','lat','lng',];


    /**
     * @param $query
     * @param $lat
     * @param $lng
     * @return mixed
     * @internal param $bounds
     */
    public function scopeSearchWithLatLng ($query,$lat,$lng) {
        return
            $query
                ->select(
                    DB::raw("*,
                        ( 3959 * acos( cos( radians(" . $lat . ") ) *
                        cos( radians( lat ) )
                        * cos( radians( lng ) - radians(" . $lng . ")
                        ) + sin( radians(" . $lat . ") ) *
                        sin( radians( lat ) ) )
                        ) AS distance"))
                ->orderBy("distance");
    }
}
