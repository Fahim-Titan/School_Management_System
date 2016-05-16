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
<h1 class="text-center">Create Notice</h1>
{!! Form::open(array('route' => 'notice.store', 'method' => 'POST')) !!}
	<ul style="list-style: none">
		{{--<li>--}}
			{{--{!! Form::label('n_id', 'N_id:') !!}--}}
			{{--{!! Form::text('n_id') !!}--}}
		{{--</li>--}}
		<li>
			{!! Form::label('n_data', 'N_data:') !!}
			{!! Form::text('n_data', null, ['class' => 'form-control']) !!}
		</li>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::date('date', null, ['class' => 'form-control']) !!}
		</li>
		<li>
			<br>{!! Form::submit( null, ['class' => 'btn btn-default']) !!}
		</li>
	</ul>
{!! Form::close() !!}
</body>
</html>