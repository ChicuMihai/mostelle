<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;
use Session;

class AdminHomeController extends Controller
{
     public function index()
     {
      return view('admin.index');
     }
     public function contact()
     {
         $info=ContactInfo::first();
         return view('admin.contact',compact('info'));
     }
     public function store(Request $request)
     {
        ContactInfo::updateOrCreate(['id'=>1],[
        'email' => request('email'),
        'tel_call_center' => request('tel_call_center'),
        'tel_criuleni' => request('tel_criuleni'),
        'tel_orhei'=>request('tel_orhei'),
        'tel_rezina'=>request('tel_rezina'),
        'tel_chisinau'=>request('tel_chisinau'),
        'tel_straseni'=>request('tel_straseni'),
        'tel_telenesti'=>request('tel_telenesti'),
        'tel_aneni_noi'=>request('tel_aneni_noi'),
        'tel_ialoveni'=>request('tel_ialoveni')

        ]);
        Session::flash('message','Informatia a fost salvata cu success');
        return redirect()->back();
     }

}
