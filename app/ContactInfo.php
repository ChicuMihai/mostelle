<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable=['email','tel_call_center','tel_criuleni','tel_orhei','tel_rezina','tel_chisinau','tel_straseni','tel_telenesti','tel_aneni_noi','tel_ialoveni'];
}
