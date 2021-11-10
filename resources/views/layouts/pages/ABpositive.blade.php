@extends('layouts.master')
@section('content')

<table class="table table-responsive table-hover">
<tr>
    <th>ID</th>
    <th>name</th>
    <th>Facebook</th>
    <th>Phone No</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>last Date of donation</th>
    <th>District</th>
    <th>Ocupation</th>
    <th>Status</th>
    <th>Action</th>
</tr>
@php $i=0; @endphp
@foreach($ABdonars as $donar)
@php $i++  @endphp
<tr>
    <td>{{$i }}</td>
    <td>{{$donar->fullname}}</td>
    <td>{{$donar->emailno}}</td>
    <td>{{$donar->mobileno}}</td>
    <td>{{$donar->age}}</td>
    <td>{{$donar->gender}}</td>
    <td>{{$donar->blood_name}}</td>
    <td>{{$donar->dod}}</td>
    <td>{{$donar->district_name}}</td>
    <td>{{$donar->message}}</td>
    <td>{{$donar->status==1?'Available':'Not Available'}}</td>
    <td><a href="{{URL::to('editblood_info')}}/{{$donar->id}}"><i class="fa fa-edit"></i> <a onclick="return confirm('Are you sure to delete this Appointment !')" href="{{URL::to('deleteblood_info',$donar->id)}}"> <i class="fa fa-trash"></i></td>

</tr>
@endforeach
</table>
@endsection
