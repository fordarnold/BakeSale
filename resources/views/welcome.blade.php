<html>
	<head>
		<title>BakeSale - A simple bakery management system</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">BakeSale</div>
				<div class="quote">hassle-free bakery and pastry shop management</div>

				<h3>
					<a href="{{ url('users/login/social') }}">
						Login with Facebook
					</a>
				</h3>
			</div>
		</div>
	</body>
</html>
