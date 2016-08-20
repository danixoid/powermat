<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name','spots','address','phone','logo','img','about','lat','lng',];


}
