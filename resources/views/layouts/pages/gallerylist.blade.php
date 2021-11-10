@extends('layouts.master')
@section('content')

<table class="table table-responsive table-hover">

            @if(Session::has('message'))
  <div data-alert class="alert-box text-danger">
       {{Session::get('message')}}
  </div>
  @endif
<tr>
    <th>ID</th>
    <th>Description</th>
    <th>Image</th>
    <th>Action</th>
</tr>
@php $i=0; @endphp
@foreach($gallery as $galleries)
@php $i++  @endphp
<tr>
    <td>{{$i }}</td>
    <td>{{$galleries->description}}</td>
   <td>
<img width="20%" src="gallery/{{$galleries->photo}}">
</td>
<td><a onclick="return confirm('Are you sure to delete this gallery !')" href="{{URL::to('gallerydelete',$galleries->id)}}"> <i class="fa fa-trash"></i></a></td>
</tr>
@endforeach
</table>
@endsection