@if(count($suggestion) > 0)
		@foreach($suggestion as $new)
		<div class="card">
			<a href="/news/{{$new->id}}">
				<div class="card-header">
					{{$new->title}}
				</div>
				<div class="row">
					<div class="col-md-4">
						<img style="width: 300px; height: 200px;" src="/storage/news_images/{{$new->news_image}}">
					</div>
					</a>
					<div class="col-md-7">
						<p align="justify">{{$new->body}}</p>
					</div>
				</div>
		</div>
		<br>
		@endforeach
	@else
		<p>No Posts Found</p>
	@endif