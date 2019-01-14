@extends('admin.layouts.app')

@section('title', 'Carousel')

@section('content')
@if(count($products) == 0)
<div class="alert alert-warning">
    <strong>Sorry!</strong> No Product Found.
</div>                                      
@else
<div class="project-list">
        <table class="table table-hover">
           
            @foreach($products as $product)
          


            <tr>
            <td class="project-title"><a href="">{{$product->lang->title}}</a></td>
                <td class="project-actions">  
                
                <form action="{{route('product.destroy',$product->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('product.edit',$product->id)}}" class="btn btn-info "><i class="fa fa-paste"></i> Edit</a>
                <button type="submit" class="btn btn-danger"><i class="fa fa-folder"></i> Delete </a>
                </form>
                </td>
            </tr>
            
            @endforeach
            
            
        </table>
        </div>
        @endif
@endsection