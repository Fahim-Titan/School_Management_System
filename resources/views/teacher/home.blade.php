@extends('layouts.teacher_master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body text-center">
                        <a href="{{url('/show_lectures')}}">show Lectures</a><br>
                        {{--<div class="alert alert-success glyphicon-alert">--}}
                        {{$confirm or ''}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection