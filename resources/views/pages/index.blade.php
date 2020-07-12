@extends('layouts.app')

@section('content')
	@include('inc.sidebar')
	<div class="col-sm-8">
	    @if(count($news) > 0)
		@foreach($news as $new)
			<div class="col-sm-12">
              <h2><a href="/news/{{$new->id}}">{{$new->title}}</a></h2>
              <h5>{{$new->date}}</h5>
              <img class="fakeimg" src="/storage/news_images/{{$new->news_image}}">
              <p class="show-read-more" align="justify">{!! $new->body !!}</p>
              <br>
            </div>
            <hr>
		@endforeach

		{{-- pagination  --}}
		{{$news->links()}}
		@else
			<p>No Posts Found</p>
		@endif
	</div>
@endsection