@extends('layouts.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('something.css') }}"> --}}
@endpush
@section('title', 'Add Poll')
@section('content')
    <form action="{{ route('addPollStore') }}" method="post">
        {{ @csrf_field() }}

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <fieldset>
                        <div class="row justify-content-center vote_header">

                            <h4><a class="btn btn-primary poll_Link" href="vote">See All Poll</a></h4>

                        </div>
                        <div class="row justify-content-center" style="padding:2rem">
                            <div class="col-md-10">
                                <div class="card">
                                    <h5 class="card-header">
                                        <div class="row">

                                            <i class="fa fa-bars"></i> &nbsp;Poll


                                        </div>
                                        <div class="card-body">
                                            <p> Question: </p>
                                            <input type="hidden" name="survey_id" value={{$survey_id}}
                                            id="" class="form-control">
                                            <input type="text" name="question" value="" id='question'
                                                class="form-control" placeholder="Enter the Question"><br>

                                            <p>Options:</p>

                                            <div class="row">
                                                <div class="col-md-10 col-10">
                                                    <div class="field_wrapper">
                                                        <div class="d-flex">

                                                            <input type="text" name="options[]"
                                                                value=""class="form-control "
                                                                placeholder="Enter the Options">

                                                            <a href="javascript:void(0);"
                                                                class="btn btn-secondary add_button"title="Add field">+</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <p> Answer: </p>
                                            <input type="text" name="answer" value="" id='answer'
                                                class="form-control" placeholder="Enter the answer"><br>
                                            <center>
                                                <button type="submit" style="padding-left: 4rem; padding-right: 4rem;"
                                                    class="btn btn-info submit-Btn">Submit</button>
                                            </center>
                                        </div>
                                </div>

                            </div>


                        </div>
                    </fieldset>

                </div>


                @push('scripts')
                    <script type="text/javascript">
                        //Product Attributes Add/Remove Script
                        var maxField = 4; //Input fields increment limitation
                        var addButton = $('.add_button'); //Add button selector
                        var wrapper = $('.field_wrapper'); //Input field wrapper
                        var fieldHTML =
                            ' <div class="d-flex pt-3"><input type="text" name="options[]" value="" class="form-control " placeholder="Enter the Options"><a href="javascript:void(0);" class="btn btn-danger remove_button">-</a></div>'; //New input field html 
                        var x = 1; //Initial field counter is 1

                        //Once add button is clicked
                        $(addButton).click(function() {
                            //Check maximum number of input fields
                            if (x < maxField) {
                                x++; //Increment field counter
                                $(wrapper).append(fieldHTML); //Add field html
                            }
                        });

                        //Once remove button is clicked
                        $(wrapper).on('click', '.remove_button', function(e) {
                            e.preventDefault();
                            $(this).parent('div').remove(); //Remove field html
                            x--; //Decrement field counter
                        });
                    </script>
                @endpush
            @endsection
