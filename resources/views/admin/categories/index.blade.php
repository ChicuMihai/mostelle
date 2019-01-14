@extends('admin.layouts.app')

@section('title', 'Carousel')

@section('content')
@if(count($categories) == 0)
<div class="alert alert-warning">
    <strong>Nu exista categorii!</strong> 
</div>                                      
@else
<div class="project-list">
        <table class="table table-hover">
           
            @foreach($categories as $category)
          


            <tr>
            <td class="project-title"><a href="">{{$category->lang->title}}</a></td>
                <td class="project-actions">  
                
                <form action="{{route('service.destroy',$category->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('service.edit',$category->id)}}" class="btn btn-info "><i class="fa fa-paste"></i> Edit</a>
                <button type="submit" class="btn btn-danger"><i class="fa fa-folder"></i> Delete </a>
                </form>
                </td>
            </tr>
            
            @endforeach
            
            
        </table>
        </div>
        @endif
@endsection