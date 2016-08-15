<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['ownder_id','title','subtitle','body'];

    public function owner() {
        return $this->hasOne('\App\User','owner_id');
    }
}
