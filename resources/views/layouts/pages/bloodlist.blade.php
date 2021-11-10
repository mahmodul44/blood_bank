@extends('layouts.master')
@section('content')

<table class="table table-responsive table-hover">
<tr>
    <th>ID</th>
    
    <th>Blood Group</th>
   
</tr>
@php $i=0; @endphp
@foreach($blood as $donar)
@php $i++  @endphp
<tr>
    <td>{{$i }}</td>
    <td>{{$donar->bloodgroup}}</td>
</tr>
@endforeach
</table>
@endsection