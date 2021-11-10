@extends('layouts.master')
@section('content')
    <div class="container">
        <hr>
        <h3 style="text-align: center;color:#ed8a0f;font-weight: bold">District Add</h3>
        <hr>
        @if(Session::has('message'))
            <div class="text-success">
                <h3 style="width:100%;padding:10px;text-align: center;background-color: #519b8a;color: #fff;">{{Session::get('message')}}</h3>
            </div>
        @endif
        <form name="" action="{{route('districtinsert')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="font-italic">District<span style="color:red">*</span> </div>
                    <div>
                        <input class="form-control" name="district_name" type="text" required/>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
                </div>
            </div>
        </form>
    </div>
@endsection
