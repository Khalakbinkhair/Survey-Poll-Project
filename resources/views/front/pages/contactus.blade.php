@extends('front.layout.layout')
@push('styles')
 <!--  <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}"> -->
@endpush
@section('content')
<div class="row justify-content-center padding-bottom padding-top">
    <div class="col-lg-9">
      @if(Session::has('error_message'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> {{ Session::get('error_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(Session::has('success_message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success:</strong> {{ Session::get('success_message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <div class="row justify-content-center">
        <div class="col-lg-6 middled">
           <h4 class="text-left">Find Us</h4>
            <p>
              288, West Nakhalpara,Tejgaon, Dhaka-1215<br>
              Phone: +8801712969304<br>
              Email: laalpion@gmail.com
            </p>
         </div>
         <div class="col-lg-6">
          <h4 class="text-center">Contact Us</h4>
          <form class="contact_form" method="POST" action="{{route('contactus')}}">
                {{ csrf_field() }}
                <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
                @error('name')
                <p class="invalid-feedback d-block" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control"  name="email" placeholder="Your Mail">
                @error('email')
                <p class="invalid-feedback d-block" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="mobile" placeholder="Mobile">
                @error('mobile')
                <p class="invalid-feedback d-block" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" rows="3"></textarea>
                @error('message')
                <p class="invalid-feedback d-block" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
              <button type="submit" class="btn submit_btn align-self-center">Send</button>
          </form>
         </div>
      </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-12 p-0">
         <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=laal%20pion&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         
    </div>
</div>
@push('scripts')
<script type="text/javascript">
  $(document).ready(function() {
  });
</script>
@endpush
@endsection