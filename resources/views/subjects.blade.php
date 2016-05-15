<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap css file-->
	<link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">
	<style>
		.my-form-size
		{
			width: 50%;
		}
	</style>
</head>
<body style="width: 50%">
<h1 class="text-center">Add Subject</h1>
{!! Form::open(array('route' => 'subject.store', 'method' => 'POST')) !!}
<ul style="list-style: none">
    {{--<li>--}}
        {{--{!! Form::label('sub_id', 'Subject ID:') !!}--}}
        {{--{!! Form::text('sub_id', null, ['class' => 'form-control']) !!}--}}
    {{--</li>--}}
    <li>
		{!! Form::label('textbook_name', 'Textbook_name:') !!}
		{!! Form::text('textbook_name', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('sub_name', 'Sub_name:') !!}
		{!! Form::text('sub_name', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('credit', 'Credit:') !!}
		{!! Form::text('credit', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		<br>{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
	</li>
</ul>
{!! Form::close() !!}
<div class="alert-warning">
    @foreach( $errors->all() as $error )
        <br> {{ $error }}
    @endforeach
</div>
</body>
</html>