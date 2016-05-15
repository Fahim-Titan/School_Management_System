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
<h1 class="text-center">Add Routine</h1>
{!! Form::open(array('route' => 'routine.store', 'method' => 'POST')) !!}
<ul style="list-style: none">
	<li>
		{!! Form::label('r_id', 'Routine ID:') !!}
		{!! Form::text('r_id', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('r_data', 'Routine:') !!}
		{!! Form::text('r_data', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		<br>{!! Form::submit( null, ['class' => 'btn btn-default']) !!}
	</li>
</ul>
{!! Form::close() !!}
</body>
</html>