<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />

	<!-- normalize css -->
	<link href="{{ asset('/vendor/foundation-5.5.0/css/normalize.css') }}" rel="stylesheet">

	<!-- responsive email css -->
	<!-- <link href="{{ asset('/vendor/foundation-5.5.0/css/foundation.css') }}" rel="stylesheet"> -->

	<!-- email layout css -->
	<link href="{{ asset('/css/email.css') }}" rel="stylesheet">

	<!-- modernizr -->
	<script src="{{ asset('/vendor/foundation-5.5.0/js/vendor/modernizr.js') }}"></script>
</head>
<body>
	<header>
		<hgroup>
			<h1 id="logo">BakeSale</h1>
			<h2>hello dear customer</h2>
		</hgroup>
	</header>

	<!-- main content -->
	<main>
		@yield('content')
	</main>

	<footer>
		<p><a href="">Unsubscribe to these emails.</a></p>
	</footer>
</body>
</html>