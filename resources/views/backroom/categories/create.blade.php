@extends('layouts.backroom')

@section('content')
<div class="row">
	<div class="large-12 columns">
		
		<section class="categories form">

			<hgroup>
				<h2>Categories</h2>
				<h4 class="subheader">Create a new category</h4>
				<hr>
			</hgroup>
			
			<form action="{{ url('backroom/categories') }}" method="POST" accept-charset="utf-8">
				<input type="text" name="name" placeholder="Name of category" required>
				<textarea name="description" placeholder="Describe the category"></textarea>

				<button type="submit" class="button small radius">Save</button>
			</form>

		</section>

	</div>
</div>
@endsection