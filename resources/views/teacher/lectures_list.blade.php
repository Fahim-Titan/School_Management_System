@extends('layouts.teacher_master')

@section('content')
    <h1 class="text-center">Uploaded Lecture List</h1><hr>
    @foreach($lectures as $lecture)
        <div class="container">

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4"><a href="{{asset('lectures/'.$lecture->file)}}">{{$lecture->file}}</a><br></div>
                <div class="col-sm-4"></div>
            </div>
        </div>

    @endforeach
@endsection