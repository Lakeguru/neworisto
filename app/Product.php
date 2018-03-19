<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_image','product_description','product_name'];

    public function product()
    {
        return $this->hasMany('App\User');
    }

    
}
