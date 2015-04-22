@extends('layouts.backroom')

@section('content')
<div class="row">
	<div class="large-12 columns">
		
		<section class="dashboard">

			<hgroup>
				<h2>Welcome to The Backroom</h2>
				<h4 class="subheader">
					This area is only seen by administrator users. Here, you are able to view, create, update and delete different resources in the application's data storage.
				</h4>
				<hr>
			</hgroup>
			
			<div class="panel large-6 columns">
				<article>
					<h5>What resources are available?</h5>

					<ul>
						<li><a href="{{ url('backroom/categories') }}">Categories</a></li>
						<li><a href="{{ url('backroom/products') }}">Products</a></li>
						<li><a href="{{ url('backroom/tags') }}">Tags</a></li>
						<li><a href="{{ url('backroom/menus') }}">Menus</a></li>
						<li><a href="{{ url('backroom/sales') }}">Sales</a></li>
						<li><a href="{{ url('backroom/purchases') }}">Purchases</a></li>
						<li><a href="{{ url('backroom/categories') }}">Categories</a></li>
						<li><a href="{{ url('backroom/categories') }}">Categories</a></li>
					</ul>
				</article>
			</div>

		</section>

	</div>
</div>
@endsection