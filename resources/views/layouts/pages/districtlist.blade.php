@extends('layouts.master')
@section('content')
    <hr>
    <h3 style="text-align: center;color:#ed8a0f;font-weight: bold">District List</h3>
    <hr>
    <table class="table table-bordered table-striped table-hover">

        @if(Session::has('message'))
            <div class="text-danger">
                <h3 style="width:100%;padding:10px;text-align: center;background-color: #519b8a;color: #fff;">{{Session::get('message')}}</h3>
            </div>
        @endif
        <tr>
            <th>ID</th>
            <th>District name</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($districtlist as $list)
            @php $i++  @endphp
            <tr>
                <td>{{$i }}</td>
                <td>{{$list->district_name}}</td>
                <td><a onclick="return confirm('Are you sure to delete this District !')" href="{{URL::to('districtdelete',$list->dist_id)}}"> <i class="fa fa-trash"></i></a></td>
            </tr>
        @endforeach
    </table>
@endsection
