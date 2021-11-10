@extends('layouts.master')
@section('content')

<div class="container">
<table class="table table-striped table-bordered table-hover">
<tr>
<th>ID</th>
<th>User Name</th>
<th>email</th>
<th>Phone</th>
<th>Gender</th>
<th>Image</th>
<th width="20%">Action</th>
</tr>
<tr>
<td>{{ Auth::user()->id }}</td>
<td>{{ Auth::user()->name }}</td>
<td>{{ Auth::user()->email }}</td>
<td>{{ Auth::user()->phone }}</td>
<td>{{ Auth::user()->gender }}</td>
<td>
<img width="20%" src="{{Auth::user()->image}}">
</td>
<td><a href="{{route('profile_edit')}}"><i class="fa fa-edit"></i> <a href=""> <i class="fa fa-trash"></i> </td>
</tr>

</table>
</div>
@endsection
