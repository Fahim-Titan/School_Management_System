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
<h1 class="text-center">Add Student</h1>

{!! Form::open(array('route' => 'student.store', 'method' => 'POST', 'files'=>true)) !!}
<ul style="list-style: none">
	<li>
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('gender', 'Gender:') !!}
		{!! Form::text('gender', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('blood_type', 'Blood_type:') !!}
		{!! Form::text('blood_type', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('dob', 'Dob:') !!}
		{!! Form::date('dob', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('phone_number', 'Phone_number:') !!}
		{!! Form::number('phone_number', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('address', 'Address:') !!}
		{!! Form::text('address', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('image', 'Image:') !!}
		{!! Form::file('image', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('father_name', 'Father_name:') !!}
		{!! Form::text('father_name', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('mother_name', 'Mother_name:') !!}
		{!! Form::text('mother_name', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		{!! Form::label('gurdian_phone_number', 'Gurdian_phone_number:') !!}
		{!! Form::number('gurdian_phone_number', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		<br>{!! Form::label('password', 'Password:') !!}
		{!! Form::password('password', null, ['class' => 'form-control']) !!}
	</li>
	<li>
		<br>{!! Form::submit( null, ['class' => 'btn btn-default']) !!}
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