@extends('admin.layouts.app')

@section('title', 'Create Service Category')

@section('content')

<div class="col-lg-6">
    <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data" name="register" onsubmit="return validateForm()" novalidate>
        {{ csrf_field() }}
        
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
                      <h3>Denumirea Categorie de servicii</h3>
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
             
               
                
                    

                <button class="btn btn-primary"type="submit">Salveaza</button>
              
            </div>


        </div>
    </form> 
    </div>
 
@endsection