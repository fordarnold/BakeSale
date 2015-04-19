@extends('layouts.pages')

@section('content')

<section class="intro">
<div class="row">
	<div class="large-12 columns">

		<div class="panel text-center">
			<hgroup>
				<h1>BakeSale</h1>
				<h3 class="subheader">
					<span style="color: brown;">bakery &amp; pastry shop</span> webstore and management system
				</h3>
			</hgroup>
			<p>
				<a href="{{ url ('install') }}" class="button radius secondary success">
					Create your web bakery
				</a>
			</p>
		</div>

	</div>
</div>
</section>

<p></p>

<div class="row">
	<div class="large-12 columns text-center">

		<article>
			<h4>Products on sale</h4>
			<p>Store, edit or delete an unlimited number of products you offer for sale.</p>
		</article>

		<article>
			<h4>Categories of products</h4>
			<p>BakeSale gives you the flexibity to group products into categories for better organisation.</p>
		</article>

		<article>
			<h4>Sales management</h4>
			<p>Instantly record product sales as soon as they are made... even on-the-go.</p>
		</article>

		<article>
			<h4>Purchases management</h4>
			<p>Instantly record purchases of new supplies for your bakery.</p>
		</article>

		<article>
			<h4>Promotions</h4>
			<p>Easily attach discounts to sales or purchases, or even individual products.</p>
		</article>

		<article>
			<h4>Multi-Store management</h4>
			<p>Does your bakery have more than one store (branch)?</p>
		</article>
	</div>
</div>

@endsection