@extends('admin.layouts.app')

@section('title', 'Create Carousel')

@section('content')

<div class="col-lg-6">
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" name="register" onsubmit="return validateForm()" novalidate>
        {{ csrf_field() }}
        <div class="tabs-container">
            <ul class="nav nav-tabs" role="tablist">
                 <li class="active"><a class="nav-link active show" data-toggle="tab" href="#tab-1">Denumirea Produs</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-2">Imagine</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-3">Descriere</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-4">Categorie</a></li>
            </ul>
            <div class="tab-content">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('success'))
                <div class="alert alert-success"> 
                {!! session('success') !!}
                </div>
                 @endif
                <div role="tabpanel" id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                      <h3>Denumirea Produs</h3>
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                @foreach(Config::get('languages') as $lang => $language)
                            <li class><a data-toggle="tab" href="#tab-{{$lang}}">{{$lang}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                                 
                        <div class="panel-body">
                            <div class="tab-content">
                                @foreach(Config::get('languages') as $lang => $language)
                            <div id="tab-{{$lang}}" class="tab-pane"> 
                                <textarea class="form-control" name="title[{{$lang}}]" id="content"></textarea>
                            </div>
                              @endforeach
                        
                           </div>
                           
                         </div>
                    </div>
             
                <div role="tabpanel" id="tab-2" class="tab-pane">
                    <div class="panel-body">
                            <div class="custom-file">
                                    <h3>Imagini</h3>
                                    <input type="file" class="form-control-file" name="img[]" id="image" required multiple>
                                    <label for="image" class="custom-file-label">Choose file...</label>
                            </div> 
                    </div>
                </div>
                <div role="tabpanel" id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                @foreach(Config::get('languages') as $lang => $language)
                            <li class><a data-toggle="tab" href="#desc-{{$lang}}">{{$lang}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                                 
                        <div class="panel-body">
                            <div class="tab-content">
                                @foreach(Config::get('languages') as $lang => $language)
                            <div id="desc-{{$lang}}" class="tab-pane"> 
                                <textarea class="form-control my-editor" name="description[{{$lang}}]" id="content"></textarea>
                            </div>
                              @endforeach
                        
                           </div>
                           
                         </div>
                    </div>
                    <div role="tabpanel" id="tab-4" class="tab-pane">
                        <div class="panel-body">
                                <div class="custom-file">
                                        <h3>Categorie</h3>
                                        <label for="category" class="custom-file-label">Alegeti in ce categorie este produsul</label>
                                        <select name="category" class="form-control m-b" id="">
                                        @if(empty($categories))
                                        <option value="">Nu sunt Categorii de servicii disponibile.Adugati va rog</option>
                                        @else
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->lang->title}}</option>
                                        @endforeach
                                        </select>
                                        @endif

                                       
                                      </select>
                                        
                                </div> 
                        </div>
                    </div>

                <button class="btn btn-primary"type="submit">Salveaza</button>
              
            </div>


        </div>
    </form> 
    </div>
 
@endsection