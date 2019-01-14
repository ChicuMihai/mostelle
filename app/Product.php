<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductTranslation;
use App\ServiceCategory;
use App\ProductPromotion;
use App\ProductPhoto;

class Product extends Model
{
    public function langs() {return $this->hasMany(ProductTranslation::class, 'product_id');}

    public function lang() { return $this->hasOne(ProductTranslation::class, 'product_id')->where('locale', app()->getLocale());}

    public function category(){
        return $this->belongsTo(ServiceCategory::class,'category_id');
    }
    public function promotion(){
        return $this->hasOne(ProductPromotion::class,'product_id');
    }
    public function photos(){
        return $this->hasMany(ProductPhoto::class,'product_id');
    }
}
