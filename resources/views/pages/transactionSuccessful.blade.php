@extends('layouts.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('something.css') }}"> --}}
@endpush
@section('title', 'Transection Success')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Transection Success</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Dashbaord</a></li>
                            <li class="breadcrumb-item active">Transection Success</li>
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
                        Yay!! Transection Successful
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
