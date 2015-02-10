
<ul>
	<li><a href="{{ URL::route('home') }}">Home</a></li>
		@if(Auth::check())
			<li><a href="{{ URL::route('account-sign-out') }}">Abmelden</a></li>
			<li><a href="{{ URL::route('account-change-password') }}">Passwort ändern</a></li>


		@else
			<li><a href="{{ URL::route('account-sign-in') }}">Login</a></li>
			<li><a href="{{ URL::route('account-create') }}">Neuen Account erstellen</a></li>
			<li><a href="{{ URL::route('account-forgot-password') }}">Passwort vergessen</a></li>

		@endif
</ul>

