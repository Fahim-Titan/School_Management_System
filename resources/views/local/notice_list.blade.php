{{--@foreach($notices as $notice)--}}
    {{--{{$notice->n_data}}<br>--}}
    {{--given at: {{$notice->date}}--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--@endforeach--}}

@extends('layouts.master')

@section('content')
    <div style="padding-top: 15px;"></div>
    @foreach($notices as $notice)

        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="media-body">
                    {{$notice->n_data}}<br>
                    {{$notice->date}}
                    </div>
                    <hr>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    @endforeach
@endsection