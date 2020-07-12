@extends('./layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>All Removed News</h3>
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
                                <td>{!!Form::open(['action'=>['NewsController@restoreNews', $new->id], 'method' => 'PUT', 'class'=>'pull-right']) !!}
                                {{Form::submit('Restore', ['class'=>'btn btn-success'])}}

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
