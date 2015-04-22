@extends('layouts.backroom')

@section('content')
<div class="row">
	<div class="large-12 columns">
		
		<section class="backroom home">

			<hgroup>
				<h2>Welcome to The Backroom</h2>
				<h4 class="subheader">
					This area is only seen by administrator users. Here, you are able to view, create, update and delete different resources in the application's data storage.
				</h4>
				<hr>
			</hgroup>
			
			<div class="panel radius">
				<article>
					<h5>What resources are available?</h5>

					<dl>
						<dt><a href="{{ url('backroom/categories') }}">Categories</a></dt>
						<dd>Categories are broad groupings of products.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/tags') }}">Tags</a></dt>
						<dd>Tags are words or phrases which describe the specific details of a product.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/menus') }}">Menus</a></dt>
						<dd>Products can be added to menus (just like restaurant menus).</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/products') }}">Products</a></dt>
						<dd>Arguably the main feature of an ecommerce application.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/stocks') }}">Product Stocks</a></dt>
						<dd>How much quantity of a product is available.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/sales') }}">Sales</a></dt>
						<dd>Orders made by customers to acquire products.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/purchases') }}">Purchases</a></dt>
						<dd>Orders made by your business to suppliers for purchase of different products.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/customers') }}">Customers</a></dt>
						<dd>The people or companies that buy products from your business.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/suppliers') }}">Suppliers</a></dt>
						<dd>The people or companies that sell products to your business.</dd>
					</dl>
					<dl>
						<dt><a href="{{ url('backroom/users') }}">Users</a></dt>
						<dd>You are able create new user accounts.</dd>
					</dl>
				</article>
			</div>

		</section>

	</div>
</div>
@endsection