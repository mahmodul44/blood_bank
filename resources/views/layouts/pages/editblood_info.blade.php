@extends('layouts.master')
@section('content')

<div  class="container">
<h1 style="margin:15px">Update Blood Donar Info</h1>
</div>
<div class="container">
<form action="{{route('updateblood_info',$bloodlist->id)}}" method="POST">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" value="{{$bloodlist->fullname}}"></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" value="{{$bloodlist->mobileno}}"></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Facebook ID/ URL</div>
<div>
<input type="email" name="emailno" class="form-control" value="{{$bloodlist->emailno}}"></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">DOB<span style="color:red">*</span> </div>
<div>
    <input type="date" name="age" class="form-control" value="{{$bloodlist->age}}">
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" >
<option value="{{$bloodlist->gender}}">{{$bloodlist->gender}}</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div>
<select name="bloodgroup" class="form-control">
    <option>Select Blood</option>
    @foreach($bloodgrouplist as $list)
<option {{$bloodlist->bloodgroup==$list->blood_id?'selected':''}} value="{{$list->blood_id}}">{{$list->blood_name }}</option>
    @endforeach
</select>
</div>
</div>
</div>


<div class="row">
	<div class="col-lg-4 mb-4">
<div class="font-italic">Last Date of Donation <span style="color:red">*</span> </div>
<div><input type="date" class="form-control" name="dod" value="{{$bloodlist->dod}}"></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">District<span style="color:red">*</span> </div>
<div>
    <select name="address" class="form-control">
        <option>Select District</option>
        @foreach($districtlist as $list)
            <option {{$bloodlist->address==$list->dist_id?'selected':''}} value="{{$list->dist_id}}">{{$list->district_name }}</option>
        @endforeach
    </select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Ocupation</div>
<div><textarea class="form-control" name="message" value="{{$bloodlist->message}}"> {{$bloodlist->message}}</textarea></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="Update" style="cursor:pointer"></div>
</div>


</div>

</form>

</div>
</div>
@endsection
