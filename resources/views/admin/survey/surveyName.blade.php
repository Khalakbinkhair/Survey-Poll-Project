@extends('layouts.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('something.css') }}"> --}}
@endpush
@section('title', 'Add Poll')
@section('content')


    <form action="{{ route('surveyNameSubmit') }}" method="post" enctype="multipart/form-data">
        {{ @csrf_field() }}


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Survey Name</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Manage Survey</a></li>
                                <li class="breadcrumb-item active">Survey Name</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            {{-- Main Content Start --}}
            <section class="content">

                <fieldset>
                    <div class="row justify-content-center vote_header">

                        <h4><a class="btn btn-primary poll_Link" href="#">See All Survey</a></h4>

                    </div>
                    <div class="row justify-content-center" style="padding:2rem">
                        <div class="col-md-10">
                            <div class="card">
                                <h5 class="card-header">
                                    <div class="row">

                                        <i class="fa fa-bars"></i> &nbsp;Survey


                                    </div>
                                    <div class="card-body">

                                        <p> Survey Name: </p>
                                        <div class="row">
                                            <div class="col-md-10 col-10">
                                                <div class="d-flex">
                                                    <input type="text" name="name" value="" id=""
                                                        class="form-control" placeholder="Enter the Question">

                                                </div>
                                                @error('name')
                                                    <span style="color:red">{{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <p>Description:</p>

                                        <div class="row">
                                            <div class="col-md-10 col-10">

                                                <div class="d-flex">
                                                    <input type="text" name="description"
                                                        value=""class="form-control " placeholder="Enter Description">
                                                </div>
                                                @error('description')
                                                    <span style="color:red">{{ $message }} </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <br>
                                        <center>
                                            <button type="submit" style="padding-left: 4rem; padding-right: 4rem;"
                                                class="btn btn-info submit-Btn">Submit</button>
                                        </center>
                                    </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </section>
        </div>


    @endsection
