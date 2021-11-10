@extends('layouts.master')
@section('content')
<div class="container">
<form name="donar" action="{{route('bloodinsert')}}" method="post">
{{csrf_field()}}
<div class="row">

<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div>
<input name="bloodgroup" type="text" required/>
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