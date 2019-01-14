<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Product;
use App\ProductTranslation;
use Session;
use Image;
use App\ServiceCategory;
use App\ProductPhoto;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        $products=Product::get()->all();
        return view('admin.products.index',compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=ServiceCategory::get()->all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request){
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        
        $product=new Product;
        $product->category_id=$request->category;
        $product->save();
        foreach($request['img'] as $file){
            $filename = generateRandomString() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/products');
            $file->move($destinationPath, $filename);
            ProductPhoto::create([
                'product_id' => $product->id,
                'file' => $filename
            ]);
            if (!file_exists('products/thumbnails')) {
                mkdir('products/thumbnails', 666, true);
            }
            
            $thumb=Image::make('products/'.$filename)->resize(400,267)->save('products/thumbnails/'.$filename);
        }
       

        foreach($request['description'] as $lang => $description) { 
            $translation = new ProductTranslation(); 
            $translation->product_id = $product->id; 
            $translation->description = $description; 
            $translation->locale = $lang;
            $translation->title=$request['title'][$lang];
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
        $product=Product::find($id);
        return view('pages.brichete',compact('product'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=ServiceCategory::get()->all();
        $product_translation=ProductTranslation::where('product_id',$id)->orderBy('id','asc')->get();
        return view('admin.products.edit',compact('product','product_translation','categories'));
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
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        
        $product=Product::findOrFail($id);


        foreach($request['description'] as $lang => $content) {
            $translation=ProductTranslation::find($lang);
            $translation->description=$content;
            $translation->title=$request['title'][$lang];
            $translation->update();
         }

         if($request->hasFile('img')){

            foreach($request['img'] as $file){
                $filename = generateRandomString() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('/products');
                $file->move($destinationPath, $filename);
                ProductPhoto::firstOrCreate([
                    'product_id'=>$id,
                    'file' => $filename
                ]);
                if (!file_exists('products/thumbnails')) {
                    mkdir('products/thumbnails', 666, true);
                }
                
                $thumb=Image::make('products/'.$filename)->resize(400,267)->save('products/thumbnails/'.$filename);
            }
        $path = public_path('/products' . '/' . $product->image);
        $thubm_path=public_path('/products/thumbnails/'.$product->image);
        \File::delete($path);
        \File::delete($thubm_path);
         }
        $category=ProductCategory::where('product_id',$id)->first();
        if($category->product_id!=request('category')){
            $category->parent_id=request('category');
            $category->save();

        }   

         Session::flash('message', 'Produsul a fost actualizat cu success');  
         return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePhotos($id)
    {
        $product_photo=ProductPhoto::findOrFail($id);
        $path = public_path('/products' . '/' . $product_photo->file);
        \File::delete($path);
        $product_photo->delete();
        return redirect()->back();


    }
    public function destroy($id)
    {
        $product=Product::find($id);
        $product_translation=ProductTranslation::where('product_id',$id);
        $product_photo=ProductPhoto::findOrFail($id);
        $product_translation->delete();
        $path = public_path('/products' . '/' . $product_photo->file);
        \File::delete($path);
        $product->delete();
        return back();
    }
}
