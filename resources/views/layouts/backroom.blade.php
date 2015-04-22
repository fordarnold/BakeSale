<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>The Backroom @ Bakesale</title>

	<!-- normalize css -->
	<link href="{{ asset('/vendor/foundation-5.5.0/css/normalize.css') }}" rel="stylesheet">

	<!-- zurb foundation css -->
	<link href="{{ asset('/vendor/foundation-5.5.0/css/foundation.css') }}" rel="stylesheet">

	<!-- application css -->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/backroom.css') }}" rel="stylesheet">

	<!-- modernizr -->
	<script src="{{ asset('/vendor/foundation-5.5.0/js/vendor/modernizr.js') }}"></script>
</head>
<body>

	<header id="header" class="fixed">

		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="{{ url('backroom') }}" title="The Backroom">Bakesale \ The Backroom</a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li><a href="{{ url('auth/logout') }}">Logout</a></li>
				</ul>
			</section>
		</nav>
		
	</header><!-- /header -->

	<!-- main content -->
	<main class="content-section">
		@yield('content')
	</main>

	<footer>
		<div class="row">
			<div class="large-12 columns text-center">
				<p class="copyright">
					Copyright &copy; {{ date('Y') }}, Meridian Consult Inc. 
					<br>
					All Rights Reserved.
				</p>
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
