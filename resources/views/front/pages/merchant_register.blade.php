@extends('front.layout.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
@endpush
@section('content')
<div class="row justify-content-center padding-top padding-bottom marchent-register">
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
      <h1 class="text-center mb-5">Merchant Registration</h1>
      <form class="marchent-form" action="{{ route('marchent_register') }}"  method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
          @error('name')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="phone" class="col-sm-3 col-form-label">Phone</label>
        <div class="col-sm-9">
          <div class="field_wrapper custom_field_wrapper">
              <div class="d-flex">
                  <input type="text" class="form-control custom_field" name="phone" value="{{ old('phone') }}" required>&emsp;
                  <button class="btn add_button" title="Add field">+</button>
              </div>
          </div>
          @error('phone')
            <p class="invalid-feedback d-block" role="alert">
              <strong>{{ $message }}</strong>
            </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
          @error('email')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="password" name="password" required>
          <span id="check_password"></span>
        </div>
      </div>
      <div class="form-group row">
        <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>
      </div>
      <div class="form-group row">
        <label for="nid" class="col-sm-3 col-form-label">Copy of NID</label>
        <div class="col-sm-9">
          <input type="file" name="nid" class="file-upload-default">
          <div class="field_wrapper">
              <div class="d-flex">
                  <input type="text" class="form-control custom_field file-upload-info" disabled>&emsp;
                  <button class="file-upload-browse btn upload_btn" type="button">Upload</button>
              </div>
          </div>
          @error('nid')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="buisness_name" class="col-sm-3 col-form-label">Business Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="buisness_name" name="buisness_name" value="{{ old('buisness_name') }}">
          @error('buisness_name')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="buisness_type" class="col-sm-3 col-form-label">Business Type</label>
        <div class="col-sm-9">
          <select class="form-control" id="buisness_type" name="buisness_type">
            <option value="">Select Section</option>
            <option value="ecommerce">eCommerce</option>
            <option value="page">FB Page</option>
          </select>
          @error('buisness_type')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="buisness_location" class="col-sm-3 col-form-label">Business Location</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="buisness_location" name="buisness_location" value="{{ old('buisness_location') }}">
          @error('buisness_location')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="reference" class="col-sm-3 col-form-label">Reference</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="reference" name="reference" value="{{ old('reference') }}">
          @error('reference')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div> 
      </div>
      <div class="form-group row">
        <label for="address" class="col-sm-3 col-form-label">Address</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="address" name="address" rows="2">{{ old('address') }}</textarea>
          @error('address')
          <p class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </p>
          @enderror
        </div>
      </div>
      <button type="submit" class="btn submit_btn">Register</button>
    </form>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
    //Phone Number Add/Remove Script
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.custom_field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="d-flex pt-3"><input type="text" class="form-control custom_field" name="alt_phone">&emsp;<button class="btn remove_button">-</button></div>'; //New input field html 
    
    //Once add button is clicked
    $(addButton).click(function(e){
      e.preventDefault();
        $(this).attr('disabled', true);
        $(wrapper).append(fieldHTML); //Add field html
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        addButton.attr('disabled', false);
    });

    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });

    //Check Password is Matches or not
  $("#confirm_password").keyup(function(){
      var password = $("#password").val();
      var confirmPassword = $("#confirm_password").val();
      if (password != confirmPassword)
          $("#check_password").html("<font color='red'>Passwords does not match!</font>");
      else
          $("#check_password").html("<font color='green'>Passwords match!</font>");
    });

	});
</script>
@endpush
@endsection