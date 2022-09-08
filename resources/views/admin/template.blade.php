@extends('layouts.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('something.css') }}"> --}}
@endpush
@section('title', 'template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Template</a></li>
                            <li class="breadcrumb-item active">Page Name</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        
        {{-- Main Content Start --}}
        <section class="content">
            
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
