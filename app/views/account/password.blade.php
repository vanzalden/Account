@extends('layout.main')

@section('content')

<h2 style="text-align:center">Passwort ändern</h2>
<br><br>

<center>
	<div class="well col-md-4 col-md-offset-4">


		<form action="{{ URL::route('account-change-password-post') }}" method="post">

			<label>Altes Passwort</label><br>
				<input type="password" name="old_password" placeholder="Passwort">
				@if($errors->has('old_password'))
					{{ $errors->first('old_password') }}
				@endif
			<br>

			<label>Neues Passwort</label><br>
				<input type="password" name="password" placeholder="Passwort">
				@if($errors->has('password'))
					{{ $errors->first('password') }}
				@endif
			<br>

			<label>Neues Passwort wiederholen</label><br>
				<input type="password" name="password_again" placeholder="Passwort wiederholen">
				@if($errors->has('password_again'))
					{{ $errors->first('password_again') }}
				@endif
			<br><br>

			<button type="submit" class="btn btn-warning" value="Change password">Ändern</button>
			{{ Form::token() }}
		</form>

	</div>
</center>
@stop
