@include('Front.layouts.header')
<div  class="container">

	     @if(Session::has('message'))
  <div class="text-success">
       <h3 style="width:100%;padding:10px;text-align: center;background-color: #519b8a;color: #fff;">{{Session::get('message')}}</h3>
  </div>
  @endif
    <hr>
<h1 style="color:red;text-align: center">Become Blood Donar</h1>
    <hr>
</div>
<div class="container">
<form action="{{route('front_bedonarinsert')}}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Facebook Id / URL</div>
<div><input type="email" name="emailno" class="form-control"></div>
</div>
</div>

<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="font-italic">Blood Group<span style="color:red">*</span> </div>
        <div>
            <select name="bloodgroup" class="form-control" required>
                <option>select Blood</option>
                @foreach($bloodlist as $key=>$list)
                    <option value="{{$list->blood_id}}">{{$list->blood_name}}</option>

                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="font-italic">District<span style="color:red">*</span></div>
        <div>
            <select name="address" class="form-control" required>
                <option>select District</option>
                @foreach($districtlist as $key=>$list)
                    <option value="{{$list->dist_id}}">{{$list->district_name}}</option>

                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>


</div>


<div class="row">

    <div class="col-lg-4 mb-4">
        <div class="font-italic">Date of Birth<span style="color:red">*</span></div>
        <div><input type="date" name="age" class="form-control" required></div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="font-italic">Last Date Of Donation<span style="color:red">*</span></div>
        <div><input type="date" name="dod" class="form-control" required></div>
    </div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Donar Ocupation</div>
<div><textarea class="form-control" name="message"> </textarea></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>


</div>

</form>

</div>
</div>
@include('Front.layouts.footer')
