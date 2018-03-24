<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = ['image'];

    public function gallery()
    {
        return $this->hasMany('App\User');
    }

}
