@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-default">Go back</a>
	<div class="card">
		<div class="card-body">
			<strong><h1>{{$news->title}}</h1></strong>
			<img  style="width: 300px; height: 200px;" src="/storage/news_images/{{$news->news_image}}">
			<hr>
			<h5>Written on: {{$news->created_at}} by {{$news->user->name}}</h5>
			<br>
			<div class="col-md-12">			
			<p>{!! $news->body !!}</p>
			</div>
		</div>
	</div>
	{{-- If the user is not logged in the following does not appear --}}
	@if(!Auth::guest())
		{{-- if the post is not of the user then the edit and delete wont appear
		if the post belongs to the logged in user then edit and delete button appears --}}
		@if(Auth::user()->id == $news->user_id)
			<div class="card-footer">
				<a href="/news/{{$news->id}}/edit" class="btn btn-primary"> Edit </a>

				{!!Form::open(['action'=>['NewsController@destroy', $news->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
					{{Form::hidden('_method', 'Delete')}}
					{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

				{!!Form::close() !!}
			</div>
		@endif
	@endif


	
	<br>
	<h1>Suggestions</h1>
	@include('news.suggestion')
@endsection