@include('Front.layouts.header')
<div  class="container">
<h1 style="margin:15px">List Of Blood Donar</h1>
</div>
<div class="container">

<table class="table table-responsive table-hover">
<tr>
    <th>ID</th>
    <th>name</th>
    <th>email</th>
    <th>Phone No</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>Address</th>
    <th>Message</th>
    
</tr>
@php $i=0; @endphp
@foreach($search_view as $donar)
@php $i++  @endphp
<tr>
    <td>{{$i }}</td>
    <td>{{$donar->fullname}}</td>
    <td>{{$donar->emailno}}</td>
    <td>{{$donar->mobileno}}</td>
    <td>{{$donar->age}}</td>
    <td>{{$donar->gender}}</td>
    <td>{{$donar->bloodgroup}}</td>
    <td>{{$donar->address}}</td>
    <td>{{$donar->message}}</td>
    </tr>
    @endforeach
    </table>
</div>
@include('Front.layouts.footer')