<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = ['service_image','service_description','service_name'];

    public function serivce()
    {
        return $this->hasMany('App\User');
    }

}
