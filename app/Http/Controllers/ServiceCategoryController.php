<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCategory;
use App\ServiceCategoryTranslation;
use Session;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=ServiceCategory::get()->all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category=new ServiceCategory();
        $category->save();

        foreach($request['title'] as $lang => $title) { 
            $translation = new ServiceCategoryTranslation(); 
            $translation->category_id = $category->id; 
            $translation->title = $title; 
            $translation->locale = $lang;
            $translation->save();
            
        }
        Session::flash('success','Produsul a fost adaugat cu success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=ServiceCategory::find($id);
        return view ('front.pages.services',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=ServiceCategory::find($id);
        $category_translation=ServiceCategoryTranslation::where('category_id',$id)->orderBy('id','asc')->get();
        return view('admin.categories.edit',compact('category','category_translation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=ServiceCategory::find($id);
        $category->delete();
        return redirect()->back();
    }
}
