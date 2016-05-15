
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
<h1 class="text-center">Add Result</h1>
{!! Form::open(array('route' => 'result.store', 'method' => 'POST')) !!}
<ul style="list-style: none">
	<li>
		{!! Form::label('c_id', 'Course ID:') !!}
		{!! Form::text('c_id', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('s_id', 'Student ID:') !!}
		{!! Form::text('s_id', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('e_id', 'Exam ID:') !!}
		{!! Form::text('e_id', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('sub_id', 'Subject ID:') !!}
		{!! Form::text('sub_id', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('number', 'Number:') !!}
		{!! Form::text('number', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		<br>{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
	</li>
</ul>
{!! Form::close() !!}
</body>
</html>
