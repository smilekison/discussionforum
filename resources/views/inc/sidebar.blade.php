<div class="row">
  <div class="col-md-3">
    <h2>Recent Posts</h2>
    @if(count($news) > 0)
    @foreach($news as $new)
      <div class="col-sm-12">
        <p><a href="/news/{{$new->id}}">{{$new->title}}</a></p>
        <p>{{$new->created_at}}</p>
        <hr>
      </div>
    @endforeach

    {{-- pagination  --}}
    {{-- {{$news->links()}} --}}
    @else
      <p>No Posts Found</p>
    @endif
</div>
