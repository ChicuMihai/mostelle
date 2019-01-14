<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTranslation;
use Illuminate\Http\Request;
use Session;
use Image;
use Illuminate\Support\Facades\Input;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Blog::get()->all();
        return view('admin.blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $post=new Blog();
        $filename = generateRandomString() . '.' . $request->thumbnail->getClientOriginalExtension();
        if (!file_exists('blog/thumbnails')) {
            mkdir('blog/thumbnails',0777, true);
        }
        $thumb=Image::make(Input::file('thumbnail'))->resize(400,267)->save('blog/thumbnails/'.$filename);
        $post->thumbnail=$filename;
        $post->save();
        foreach($request['content'] as $lang => $description) { 
            $translation = new BlogTranslation(); 
            $translation->post_id = $post->id; 
            $translation->content = $description; 
            $translation->locale = $lang;
            $translation->title=$request['title'][$lang];
            $translation->save();
            
        }
        Session::flash('success','Postarea a fost adaugata cu success');
    
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $post_translation=BlogTranslation::find($blog->id)->get();
        return view('admin.blog.edit',compact('blog','post_translation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Blog::find($id);
        $post_translation=BlogTranslation::where('post_id',$id);
        $product_translation->delete();
        $product->delete();
        return back();
    }
}
