<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>BakeSale &mdash; Welcome</title>

	<!-- normalize css -->
	<link href="{{ asset('/vendor/foundation-5.5.0/css/normalize.css') }}" rel="stylesheet">

	<!-- zurb foundation css -->
	<link href="{{ asset('/vendor/foundation-5.5.0/css/foundation.css') }}" rel="stylesheet">

	<!-- my css -->
	<link href="{{ asset('/css/my.css') }}" rel="stylesheet">

	<!-- modernizr -->
	<script src="{{ asset('/vendor/foundation-5.5.0/js/vendor/modernizr.js') }}"></script>
</head>
<body>

	<header class="fixed">
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name"><h1><a href="{{ url('/') }}">BakeSale</a></h1></li>
			</ul>
		</nav>
	</header>

	<main>
		@yield('content')
	</main>

	<footer>
		<div class="row">
			<div class="large-4 columns">
				<h6>Copyright info</h6>
				<ul>
					<li>Copyright &copy; {{ date('Y') }}</li>
				</ul>
			</div>
			<div class="large-4 columns">
				<h6>Company info</h6>
				<ul>
					<li>About Us</li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="large-4 columns">
				<h6>Legal info</h6>
				<ul>
					<li>Terms and Conditions</li>
					<li>Privacy Policy</li>
					<li>Cookie Policy</li>
				</ul>
			</div>
		</div>
	</footer>

	<!-- scripts -->
	<script src="{{ asset('/vendor/foundation-5.5.0/js/vendor/jquery.js') }}"></script>
	<script src="{{ asset('/vendor/foundation-5.5.0/js/foundation.min.js') }}"></script>
	<script>
      $(document).foundation();
    </script>
</body>
</html>
