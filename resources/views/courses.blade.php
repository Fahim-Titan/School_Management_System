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
		.placeholder {
			color:    #fff;
		}

	</style>
</head>
<body style="width: 50%">
<h1 class="text-center">Add Courses</h1>

{!! Form::open(array('route' => 'course.store', 'method' => 'POST')) !!}
	<ul style="list-style: none">
		<li>
			{!! Form::label('sub_id1', 'Subject ID 1:') !!}
			{!! Form::text('sub_id1', null, ['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id1', 'Teacher ID  1:') !!}
			{!! Form::text('t_id1', null, ['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id2', 'Subject ID 2:') !!}
			{!! Form::text('sub_id2',100, ['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id2', 'Teacher ID  2:') !!}
			{!! Form::text('t_id2',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id3', 'Subject ID 3:') !!}
			{!! Form::text('sub_id3',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id3', 'Teacher ID  3:') !!}
			{!! Form::text('t_id3',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id4', 'Subject ID 4:') !!}
			{!! Form::text('sub_id4',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id4', 'Teacher ID  4:') !!}
			{!! Form::text('t_id4',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id5', 'Subject ID 5:') !!}
			{!! Form::text('sub_id5',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id5', 'Teacher ID  5:') !!}
			{!! Form::text('t_id5',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id6', 'Subject ID 6:') !!}
			{!! Form::text('sub_id6',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id6', 'Teacher ID  6:') !!}
			{!! Form::text('t_id6',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id7', 'Subject ID 7:') !!}
			{!! Form::text('sub_id7',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id7', 'Teacher ID 7:') !!}
			{!! Form::text('t_id7',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id8', 'Subject ID 8:') !!}
			{!! Form::text('sub_id8',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id8', 'Teacher ID 8:') !!}
			{!! Form::text('t_id8',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id9', 'Subject ID 9:') !!}
			{!! Form::text('sub_id9',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id9', 'Teacher ID 9:') !!}
			{!! Form::text('t_id9',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id10', 'Subject ID 10:') !!}
			{!! Form::text('sub_id10',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id10', 'Teacher ID 10:') !!}
			{!! Form::text('t_id10',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id11', 'Subject ID 11:') !!}
			{!! Form::text('sub_id11',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id11', 'Teacher ID 11:') !!}
			{!! Form::text('t_id11',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id12', 'Subject ID 12:') !!}
			{!! Form::text('sub_id12',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id12', 'Teacher ID 12:') !!}
			{!! Form::text('t_id12',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id13', 'Subject ID 13:') !!}
			{!! Form::text('sub_id13',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id13', 'Teacher ID 13:') !!}
			{!! Form::text('t_id13',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('sub_id14', 'Subject ID 14:') !!}
			{!! Form::text('sub_id14',100,['class' => 'form-control placeholder']) !!}
		</li>
		<li>
			{!! Form::label('t_id14', 'Teacher ID 14:') !!}
			{!! Form::text('t_id14',100,['class' => 'form-control placeholder']) !!}
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