<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title', 'My Default Title')</title>
   		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
   		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	</head>

	<body>
		@include('partials.navbar')

		<div class="container">
			<div class="app mt-5">
				@yield('content')
			</div>
		</div>

    <script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>