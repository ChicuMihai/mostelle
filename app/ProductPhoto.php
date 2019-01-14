<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $fillable=['file','product_id'];
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
