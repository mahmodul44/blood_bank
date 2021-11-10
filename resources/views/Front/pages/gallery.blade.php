@include('Front.layouts.header')
<hr>
<h1 style="margin:15px;color:red;text-align: center">Our Gallery</h1>
<hr>
<div class="container-fluid ">
<div class="row">
  @foreach($gallery as $galleries)
<div class="col-sm-4">
<div class="card" style="">
    <img width="100%" src="gallery/{{$galleries->photo}}">
    <div class="card-body">
      <p class="card-text">{{$galleries->description}}</p>
    </div>
  </div>
</div>

@endforeach
</div>
<br>
</div>
<hr>
@include('Front.layouts.footer')
