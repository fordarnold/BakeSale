@extends('layouts.emails')

@section('content')

<article class="email-content">
	<hgroup>
		<h3 class="subject">{{ $subject }}</h3>
		<h5 class="intro-text">{{ $intro }}</h5>
	</hgroup>
	<p class="details">
		{{ $details }}
	</p>
</article>

@endsection