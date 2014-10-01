@extends('layouts.default')

@section('content')
	<h1>Sign In!</h1>

	@include('layouts.partials.errors')

	{{ Form::open(['route' => 'login_path']) }}

	<div class="form-group">
		{{ Form::label('email') }}
		{{ Form::email('email', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::label('password') }}
		{{ Form::password('password', ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Sign In', null, ['class' => 'btn btn-primary']) }}
	</div>

	{{ Form::close() }}
@stop