@include('Front.layouts.header')
{{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">--}}

{{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>--}}
<div class="container">
<h1 style="margin:15px;text-align: center">Search Blood Donar</h1>
    <hr>
<form action="{{url::to('view_donar')}}" class="form-inline">

    <select class="form-control mr-sm-2" id="blood_id">
        <option value="">Select Blood Group</option>
@foreach($bloodlist as $blood)
        <option value="{{$blood->blood_id }}">{{$blood->blood_name}}</option>
        @endforeach
    </select>
      <select name="address" class="form-control mr-sm-2" id="dist_id">
      <option value="">Search your location</option>
          @foreach($districtlist as $disttrict)
              <option value="{{$disttrict->dist_id }}">{{$disttrict->district_name}}</option>
          @endforeach

      </select>
      <input class="btn btn-outline-success my-2 my-sm-0" type="button" id="data_submit" value="search">
    </form>
<hr>
<table class=" table-hover table-bordered" id="myTable">
    <thead>
    <tr>
        <th scope="col">SI</th>
        <th scope="col">Donar Name</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody id="result_value">

    </tbody>
{{--    <tbody>--}}
{{--    @foreach($donarlist as $key=>$list)--}}
{{--    <tr>--}}
{{--        <th scope="row">{{$key+1}}</th>--}}
{{--        <td>{{$list->fullname}}</td>--}}
{{--        <td>{{$list->bloodgroup}}</td>--}}
{{--        <td>{{$list->mobileno}}</td>--}}
{{--        <td>{{$list->address}}</td>--}}

{{--    </tr>--}}
{{--    @endforeach--}}

{{--    </tbody>--}}
</table>
    <br>
</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

    $('#data_submit').on('click', function () {

        var blood_id = $('#blood_id').val();
        var dist_id = $('#dist_id').val();

            $.ajax({
                method: 'POST',
                url: '{{ route('Blooddetails') }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'blood_id' : blood_id,
                    'dist_id':dist_id,
                },
                success: function(data){
                    var i=0;
                    var tr_html='';
                    $.each(data, function (key, value) {
                        i++;
                        //console.log(balance);
                        tr_html+='<tr>'+
                            '<td>'+i+'</td>'+
                            '<td>'+value.fullname+'</td>'+
                            '<td>'+value.blood_name+'</td>'+
                            '<td>'+value.mobileno+'</td>'+
                            '<td>'+value.district_name+'</td>'+
                            '</tr>';

                    });

                    if(tr_html==''){

                        var megs='<tr>'+
                            '<td colspan="11" style="text-align: center;font-weight: bold;font-size: 18px">data not found</td>'+
                            '</tr>';
                        $('#result_value').html(megs);
                    }else{


                        $('#result_value').html(tr_html);
                    }
                },

            });

    });
</script>
@include('Front.layouts.footer')
