@extends('admin.layouts.app')

@section('title', 'Carousel')

@section('content')
@if(count($posts) == 0)
<div class="alert alert-warning">
    <strong> Nu sunt postari in blog.</strong>
</div>                                      
@else
<div class="project-list">
        <table class="table table-hover">
           
            @foreach($posts as $post)
          


            <tr>
            <td class="project-title"><a href="">{{$post->lang->title}}</a></td>
                <td class="project-actions">  
                
                <form action="{{route('blog.destroy',$post->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('blog.edit',$post->id)}}" class="btn btn-info "><i class="fa fa-paste"></i> Edit</a>
                <button type="submit" class="btn btn-danger"><i class="fa fa-folder"></i> Delete </a>
                </form>
                </td>
            </tr>
            
            @endforeach
            
            
        </table>
        </div>
        @endif
@endsection