@extends('layouts.master')
@section('content')

<table class="table table-responsive table-hover">
<tr>
    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>Phone No</th>
    <th>Message</th>
    <th>Action</th>
</tr>
@php $i=0; @endphp
@foreach($contacts as $contact)
@php $i++  @endphp
<tr>
    <td>{{$i }}</td>
    <td>{{$contact->name}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->mobile}}</td>
    <td>{{$contact->message}}</td>
    <td><a onclick="return confirm('Are you sure to delete this Appointment !')"  href="{{URL::to('messagedelete')}}\{{$contact->id}}"><i class="fa fa-trash"></i></a></td>
</tr>
@endforeach
</table>
@endsection