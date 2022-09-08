@extends('layouts.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('something.css') }}"> --}}
@endpush
@section('title', 'Checkout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Checkout</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        
        {{-- Main Content Start --}}
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Add Menu') }}</div>
            
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('checkout_post') }}">
                                    @csrf
                                    {{-- {{dd($restaurants)}} --}}
                                    {{-- <input type="text" name="client_id" value="{{$restaurant[0]['id']}}"> --}}
                                    
                                    <div class="row mb-3">
                                        <label for="total_amount" class="col-md-4 col-form-label text-md-end">Total Amount (৳)<span class="text-danger">*</span></label>
            
                                        <div class="col-md-6">
                                            <input type="number" id="total_amount" name="total_amount" class="form-control @error('total_amount') is-invalid @enderror" required autocomplete="total_amount" autofocus min="0"
                                            value="0" step="1">
            
                                            @error('total_amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
    
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-info">
                                                {{ __('Checkout') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </section>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {

            });
        </script>

        {{-- <script src="{{ asset('something.js') }}"></script> --}}
    @endpush
@endsection
