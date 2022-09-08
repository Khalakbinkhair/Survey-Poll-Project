@extends('front.layout.layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
@endpush
@section('content')
    <form action="{{ route('homeAnswerSubmit') }}" method="post">
        {{ @csrf_field() }}


        <div class="container-fluid">
            <fieldset>
                @foreach ($survey as $survey)
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">

                                    <p><b>{{ $survey->status }} Name: {{ $loop->index + 1 }}.
                                        &nbsp; {{ $survey->name }}</b></p>

                                    <p>Description: {{ $survey->description }}</p>

                                    <i class="fa fa-bars"></i> &nbsp; <b>{{ $survey->status }}</b><br><br>

                                    @foreach ($survey->questions as $s)
                                        <div>
                                           <b> Question {{ $loop->index + 1 }}.&nbsp;{{ $s->question }}</b>
                                        </div>
                                        <br>

                                        @foreach (explode(',', $s->options) as $option)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id=""
                                                    name="options[]" value="">
                                                <label class="form-check-label" for="options[]">
                                                    {{ $option }}
                                                </label>
                                            </div>
                                        @endforeach
                                    <br><br>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                <center>
                    <button type="submit" style="padding-left: 4rem; padding-right: 4rem;"
                        class="btn btn-info submit-Btn">Submit</button>
                </center>
                <br>
        </div>
        </div>
        </fieldset>
        </div>

        @push('scripts')
            <script type="text/javascript">
                $(document).ready(function() {});
            </script>
        @endpush
    @endsection
