@include('Front.layouts.header')
<div class="container">
    <h1 style="margin:15px;text-align: center">Blood Donar List</h1>
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

            <tbody>
            @foreach($donarlist as $key=>$list)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$list->fullname}}</td>
                <td>{{$list->blood_name}}</td>
                <td>{{$list->mobileno}}</td>
                <td>{{$list->district_name}}</td>

            </tr>
            @endforeach

            </tbody>
    </table>
    <br>
</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
@include('Front.layouts.footer')
