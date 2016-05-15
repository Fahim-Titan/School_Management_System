{{--this is teacher list page--}}
{{--@foreach($teacher as $value)--}}
    {{--<img src="{{asset('teacher_images/'.$value->image)}}">--}}
    {{--{{$value->name}} <br>--}}
    {{--{{$value->qualification}}<br>--}}
    {{--{{ HTML::image('img/picture.jpg', 'a picture', array('class' => 'thumb')) }}--}}
    {{--<img src="{{asset('public/teacher_images/2016-05-15-07-36-44-Capture.PNG')}}"><br>--}}
    {{--<img src="http://localhost:8000/public/teacher_images/2016-05-15-07-36-44-Capture.PNG">--}}
    {{--{{$value->email}}<br>--}}
    {{--{{$value->phone_number}}--}}
    {{--@endforeach--}}

@extends('layouts.master')

@section('content')
    <div style="padding-top: 15px;"></div>
    @foreach($teacher as $value)

        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4"><img src="{{asset('teacher_images/'.$value->image)}}" width="100px" height="150px"></div>
                        <div class="col-sm-8">
                            Name: {{$value->name}} <br>
                            Qualification: {{$value->qualification}}<br>
                            Phone: {{$value->phone_number}}<br>
                            Email: {{$value->email}}<br>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    @endforeach
@endsection