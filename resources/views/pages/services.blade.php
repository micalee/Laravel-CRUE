@extends('layouts.app')

@section('content')
	<h1>{{ $data['title'] }}</h1>
	<ul>
		@if(count($data['services']) >0)
			@foreach($data['services'] as $service)
				<li>{{ $service }}</li>
			@endforeach
		@endif

	</ul>
@endsection