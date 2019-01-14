<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LanguageController extends Controller
{
    public function switchLang($lang)

    {
        Session::put('locale',$lang);
        return redirect()->back();
    }
}
