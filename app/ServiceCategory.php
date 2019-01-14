<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ServiceCategoryTranslation;
use App\Product;
class ServiceCategory extends Model
{
    public function langs() {return $this->hasMany(ServiceCategoryTranslation::class, 'category_id');}
    public function lang() { return $this->hasOne(ServiceCategoryTranslation::class, 'category_id')->where('locale', app()->getLocale());}
    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
