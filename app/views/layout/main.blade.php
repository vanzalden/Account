<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Accounst System</title>
	{{ HTML::style('/css/bootstrap.min.css') }}
	{{ HTML::style('/css/bootstrap-theme.css') }}
</head>
<body>
	<div id="nav">
		<div class="navbar navbar-inverse">
			<a class="navbar-brand">convertis Account System</a>
			@include('layout.navigation')
		</div>
	</div>


	@if(Session::has('global'))
		<p>{{ Session::get('global') }}</p>
	@endif



	
	@yield('content')


	<!-- Javascript Files required for page-->
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>