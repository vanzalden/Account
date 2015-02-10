@extends('layout.main')

@section('content')

<h2 style="text-align:center">Neuen Account erstellen</h2>
<br><br>

<center>
	<div class="well col-md-4 col-md-offset-4">

		<form action="{{ URL::route('account-create-post') }}" method="post">

			<label>Email</label><br>
				<input type="text" name="email" placeholder="email@mail.com"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
				@if($errors->has('email'))
					{{ $errors->first('email') }}
				@endif
			<br><br>

			<label>Username</label><br>
				<input type="text" name="username" placeholder="Username"{{ (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : '' }}>
				@if($errors->has('username'))
					{{ $errors->first('username') }}
				@endif
			<br><br>

			<label>Passwort</label><br>
				<input type="password" name="password" placeholder="Passwort">
				@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
			<br><br>

			<label>Passwort wiederholen</label><br>
				<input type="password" name="password_again" placeholder="Passwort wiederholen">
				@if($errors->has('password_again'))
					{{ $errors->first('password_again') }}
				@endif
			<br><br>

			<button type="submit" class="btn btn-success" value="Create account">Account erstellen</button>
			{{ Form::token() }}
		</form>

	</div>
</center>
@stop
	