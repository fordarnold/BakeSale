@extends('layouts.default')

@section('content')

<div class="row">
	<div class="large-12 columns">

		<div class="panel text-center">
			<hgroup>
				<h1>Error</h1>
				<h3 class="subheader">
					This is a restricted area.
				</h3>
				<p>
					<a href="{{ url ('/') }}" class="button minimal-button radius tiny alert">
						&laquo; Oops... lets go back
					</a>
				</p>
			</hgroup>
		</div>

	</div>
</div>

@endsection