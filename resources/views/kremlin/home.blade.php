@extends('layouts.kremlin')

@section('content')
<div class="row">
	<div class="large-12 columns">
		
		<section class="kremlin home">

			<hgroup>
				<h2>Welcome to The Kremlin</h2>
				<h4 class="subheader">
					This area is restricted to system administrators only! System admins are able to modify highly sensitive parts of the application, for example enabled modules.
				</h4>
				<hr>
			</hgroup>

			<div class="panel radius">
				<article>
					<h5>What resources are available?</h5>

					<p>
						System administrators are able to access any part of The Backroom, plus the resources shown below.
					</p>

					<dl>
						<dt><a href="{{ url('kremlin/modules') }}">Modules</a></dt>
						<dd>The enabled system modules. Different packages have different enabled modules.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('kremlin/users') }}">Users</a></dt>
						<dd>You are able create new user accounts, including system admin users.</dd>
					</dl>
				</article>
			</div>

		</section>

	</div>
</div>
@endsection