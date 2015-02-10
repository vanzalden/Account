@extends('layout.main')

@section('content')

<h2 style="text-align:center">Login</h2>
<br><br>

<center>
	<div class="well col-md-4 col-md-offset-4">
		<form action="{{ URL::route('account-sign-in-post') }}" method="post">
		
			<label>Email</label><br>
				<input type="text" name="email" placeholder="email@mail.com"{{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }}>
				@if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
			<br>

			<label><br>Passwort</label><br>
				<input type="password" name="password" placeholder="Passwort">
				@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
			<br><br>

			<button type="submit" class="btn btn-primary" value="Login">Login</button>
			{{ Form::token() }}
		</form>
	</div>
</center>
@stop