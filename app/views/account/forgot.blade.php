@extends('layout.main')

@section('content')

<h2 style="text-align:center">Passwort vergessen</h2><br>
<h6 style="text-align:center">Es wird ein neues Passwort an<br> Deine E-Mail Adresse gesendet.</h6>
<br><br>


<center>
	<div class="well col-md-4 col-md-offset-4">
		<form action="{{ URL::route('account-forgot-password-post') }}" method="post">

			<label>Email</label><br>
			<input type="text" name="email" placeholder="email@mail.com"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
			<br><br>

			<button type="submit" class="btn btn-danger" value="Recover">Anfordern</button>
			{{ Form::token() }}
		</form>
	</div>
</center>
@stop