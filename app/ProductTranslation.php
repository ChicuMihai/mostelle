<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    protected $fillable = ['locale','description','title','product_id'];
    public $timestamps = false;
}
