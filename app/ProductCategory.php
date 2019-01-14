<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductCategory extends Model
{
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
    
    public function child()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    public function product()
    {
        return $this->hasOne(Product::class, 'id');
    }

    public function isParent() 
    {
    return !$this->parent_id ? true : false; // if category_id is null => is a Parent Category
    }
    public function hasChild()
    {
        return $this->hasMany(self::class)->where('parent_id',$this->id);

    }

}
