@extends('layouts.app')
@push('styles')
    {{-- <link rel="stylesheet" href="{{ asset('something.css') }}"> --}}
@endpush
@section('title', 'Add Survey')
@section('content')

    <form action="{{ route('addSurveySubmit') }}" method="post" enctype="multipart/form-data">
        {{ @csrf_field() }}
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Survey</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Manage Survey</a></li>
                                <li class="breadcrumb-item active">Add Survey</li>
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
                                        <p> 1. Question: </p>
                                        <div class="row">
                                            <div class="col-md-10 col-10">
                                                <div class="d-flex">
                                                    <input type="hidden" name="survey_id" value={{$survey_id}}
                                                        id="" class="form-control">

                                                    <input type="text" name="question-0" value=""
                                                        id="" class="form-control"
                                                        placeholder="Enter the Question">

                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <p>Options:</p>

                                        <div class="row">
                                            <div class="col-md-5 col-5">

                                                <div class="d-flex">
                                                    <input type="text" name="options-0[]"
                                                        value=""class="form-control " placeholder="1">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5">

                                                <div class="d-flex">
                                                    <input type="text" name="options-0[]"
                                                        value=""class="form-control " placeholder="2">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <div class="d-flex">
                                                    <input type="text" name="options-0[]"
                                                        value=""class="form-control " placeholder="3">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-5">
                                                <div class="d-flex">
                                                    <input type="text" name="options-0[]"
                                                        value=""class="form-control " placeholder="4">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <p> Answer: </p>
                                        <div class="row">
                                            <div class="col-md-10 col-10">
                                                <div class="d-flex">
                                                    <input type="text" name="answer-0" value="" id=""
                                                        class="form-control" placeholder="Enter the Answer">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="add_question_field_wrapper">
                                            <a href="javascript:void(0);" class="btn btn-secondary add_question sticky"
                                                title="Add field">Add More Question</a>
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
        @push('scripts')
            <script type="text/javascript">
                //ADD QUESTION

                //Product Attributes Add/Remove Script
                var index=1;
                // var maxField_question = 10; //Input fields increment limitation
                var addButton_question = $('.add_question'); //Add button selector
                var wrapper_question = $('.add_question_field_wrapper'); //Input field wrapper
                // var fieldHTML_question =
                //     '<div class="pt-3"> <p> Question: </p><div class="row"><div class="col-md-10 col-10"><div class="d-flex">' +
                //     '<input type="text" name="question-'+index+'" value="" id="" class="form-control" placeholder="Enter the Question"></div></div></div>' +
                //     '<br><p>Options:</p><div class="row"><div class="col-md-5 col-5"><div class="d-flex">' +
                //     '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="1"></div></div>' +
                //     '<div class="col-md-5 col-5"><div class="d-flex">' +
                //     '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="2"></div></div></div><br>' +
                //     '<div class="row"><div class="col-md-5 col-5"><div class="d-flex">' +
                //     '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="3"></div></div>' +
                //     '<div class="col-md-5 col-5"><div class="d-flex">' +
                //     '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="4"></div></div></div><br><p> Answer: </p>' +
                //     '<div class="row"><div class="col-md-10 col-10"><div class="d-flex">' +
                //     '<input type="text" name="answer-'+index+'" value="" id="" class="form-control" placeholder="Enter the answer"></div></div></div>' +
                //     '<br><a href="javascript:void(0);" class="btn btn-danger removeButton_question">Remove</a></div>'; //New input field html 


                var y = 1; //Initial field counter is 1

                //Once add button is clicked
                $(addButton_question).click(function() {
                    //Check maximum number of input fields
                        $(wrapper_question).append('<div class="pt-3"> <p>'+(index+1)+'. Question: </p><div class="row"><div class="col-md-10 col-10"><div class="d-flex">' +
                    '<input type="text" name="question-'+index+'" value="" id="" class="form-control" placeholder="Enter the Question"></div></div></div>' +
                    '<br><p>Options:</p><div class="row"><div class="col-md-5 col-5"><div class="d-flex">' +
                    '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="1"></div></div>' +
                    '<div class="col-md-5 col-5"><div class="d-flex">' +
                    '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="2"></div></div></div><br>' +
                    '<div class="row"><div class="col-md-5 col-5"><div class="d-flex">' +
                    '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="3"></div></div>' +
                    '<div class="col-md-5 col-5"><div class="d-flex">' +
                    '<input type="text" name="options-'+index+'[]" value=""class="form-control " placeholder="4"></div></div></div><br><p> Answer: </p>' +
                    '<div class="row"><div class="col-md-10 col-10"><div class="d-flex">' +
                    '<input type="text" name="answer-'+index+'" value="" id="" class="form-control" placeholder="Enter the answer"></div></div></div>' +
                    '<br><a href="javascript:void(0);" class="btn btn-danger removeButton_question">Remove</a></div>'); //Add field html
                        
                    index ++;
                    // console.log(index);   
                    
                });

                //Once remove button is clicked
                $(wrapper_question).on('click', '.removeButton_question', function(e) {
                    e.preventDefault();
                    $(this).parent('div').remove(); //Remove field html
                    y--; //Decrement field counter
                    index--;
                });


               
            </script>
        @endpush
    @endsection
