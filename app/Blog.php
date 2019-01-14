<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function langs() {return $this->hasMany(BlogTranslation::class, 'post_id');}

    public function lang() { return $this->hasOne(BlogTranslation::class, 'post_id')->where('locale', app()->getLocale());}
}
