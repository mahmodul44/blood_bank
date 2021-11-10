@extends('layouts.master')
@section('content')
<div class="container">
	       @if(Session::has('message'))
  <div data-alert class="alert-box text-success">
       {{Session::get('message')}}
  </div>
  @endif
<form name="donar" action="{{route('galleryinsert')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Image<span style="color:red">*</span> </div>
<div>
<input name="photo" type="file" required/>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Description<span style="color:red">*</span> </div>
<div>
<textarea class="form-control" name="description"></textarea>
</div>
</div>

</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
</form>
</div>
@endsection