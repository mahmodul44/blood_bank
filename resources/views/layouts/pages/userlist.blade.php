@extends('layouts.master')
@section('content')

<table class="table table-responsive table-hover">
<tr>
    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>Phone No</th>
    <th>Gender</th>
    <th>Image</th>
</tr>
@php $i=0; @endphp
@foreach($users as $user)
@php $i++  @endphp
<tr>
    <td>{{$i }}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->gender}}</td>
   <td>
<img width="20%" src="{{$user->image}}">
</td>
</tr>
@endforeach
</table>
@endsection