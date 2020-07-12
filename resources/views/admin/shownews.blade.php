@extends('./layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>All News</h3>
                        <table class="table table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>created_Date</th>
                                <th>Category</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                              </tr>
                            </thead>
                            @if(count($news) > 0)
                            @foreach($news as $new)
                              <tbody>
                              <tr>
                                <td>{{$new->id}}</td>
                                <td>{{$new->title}}</td>
                                <td>{{$new->created_at}}</td>
                                <td>{{$new->category}}</td>
                                <td><a href="/news/{{$new->id}}" class="btn btn-primary"> View </a></td>
                                <td>{!!Form::open(['action'=>['NewsController@destroy', $new->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method', 'Delete')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

                                {!!Form::close() !!}</td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    @else
                        <p>No News Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
