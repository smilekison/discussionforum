@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($news) > 0)
		@foreach($news as $new)
		<div class="card">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img style="width: 100% !important; height: 20% !important" src="/storage/news_images/{{$new->news_image}}">
				</div>

				<div class="col-md-8 col-sm-8">
					<h3><a href="/news/{{$new->id}}">{{$new->title}}</a></h3>
					<small>Written on {{$new->created_at}}</small>
					<p>{!! $new->body !!}</p>	
				</div>
			</div>
		<hr>
			
		</div>
		@endforeach

		{{-- pagination  --}}
		{{$news->links()}}

	@else
		<p>No Posts Found</p>
	@endif
	
@endsection