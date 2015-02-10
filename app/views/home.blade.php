@extends('layout.main')

@section('content')
	@if(Auth::check())
		<p>Hello, {{ Auth::user()->username }}.</p>
	@else
	<center>
		<dvi class=" well col-md-4 col-md-offset-4">
		<h2>Du bist nicht Angemeldet!</h2><br>
		<h4>Bitte erstelle einen neuen Account</h4><br>
		<h4>oder loge Dich ein!</h4>
		</dvi>
	</center>
		
	@endif
@stop