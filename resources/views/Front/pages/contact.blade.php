@include('Front.layouts.header')
<style>
    .bg-image{
        background-image: url("img/banner2.jpg");
    }
    label{
        color: black;
        font-weight: bold;
    }
</style>
<hr>
<h1 style="color:red;text-align: center;">Contact Us</h1>
 @if(Session::has('message'))
        <div class="text-success">
            <h3 style="width:100%;padding:10px;text-align: center;background-color: #519b8a;color: #fff;">{{Session::get('message')}}</h3>
        </div>
  @endif
<div class="container-fluid bg-image">
<div class="row">
            <!-- Map Column -->
              <div class="col-lg-4 mb-2">

            </div>
            <div class="col-lg-4 mb-5">

                <form action="{{route('contact')}}" method="post">
                @csrf
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone"  required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="2" cols="40" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="send"  class="btn btn-primary btn-center">Send Message</button>
                </form>
            </div>
</div>
</div>
@include('Front.layouts.footer')
