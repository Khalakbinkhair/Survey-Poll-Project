@extends('front.layout.layout')
<!-- @push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
@endpush -->
@section('content')
<div class="row justify-content-center padding-top padding-bottom services_page">
  <div class="col-lg-9">
    <h1 class="text-center pb-4">Services</h1>
    @foreach( $services as $key => $service )
    @if($key % 2 == 0)
    <div class="row single_service_row">
      <div class="col-md-7 pb-3">
          <img class="img-fluid" src="{{asset('frontend/images/service_images/large/'.$service['img_src'])}}" />
      </div>
      <div class="col-md-5 pb-3 middled even_text">
        <h4>{{ $service['service_type'] }}</h4>
        <p>The product will arrive within <strong>{{ $service['delivery_time'] }}</strong></p>
        <p>We will charge <strong>{{ $service['upto_one_kg'] }} TK</strong> per kg</p>
        <p>Next per kg will have <strong>{{ $service['extra_per_kg'] }} TK</strong></p>
      </div>
    </div>
    @else
    <div class="row single_service_row">
      <div class="col-md-5 pb-3 order-1 order-sm-0 middled odd_text">
        <h4>{{ $service['service_type'] }}</h4>
        <p>The product will arrive within <strong>{{ $service['delivery_time'] }}</strong></p>
        <p>We will charge <strong>{{ $service['upto_one_kg'] }} TK</strong> per kg</p>
        <p>Next per kg will have <strong>{{ $service['extra_per_kg'] }} TK</strong></p>
      </div>
      <div class="col-md-7 pb-3 order-0 order-sm-1">
          <img class="img-fluid" src="{{asset('frontend/images/service_images/large/'.$service['img_src'])}}" />
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>


@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
	});
</script>
@endpush
@endsection