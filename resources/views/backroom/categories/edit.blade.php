@extends('layouts.backroom')

@section('content')
<div class="row">
	<div class="large-12 columns">
		
		<section class="categories form">

			<hgroup>
				<h2>Categories</h2>
				<h4 class="subheader">Edit a specified category</h4>
				<hr>
			</hgroup>
			
			<form action="{{ url('backroom/categories/'.$category->id) }}" method="PUT" accept-charset="utf-8">
				<input type="text" name="name" value="{{ $category->name }}" required>
				<textarea name="description">{{ $category->description }}</textarea>

				<button type="submit" class="button small radius">Update</button>
			</form>

		</section>

	</div>
</div>
@endsection