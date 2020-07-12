@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/news/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog news</h3>
                    @if(count($news)>0)
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
                                <td><a href="/news/{{$new->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>{!!Form::open(['action'=>['NewsController@destroy', $new->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method', 'Delete')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

                                {!!Form::close() !!}</td>
                              </tr>
                            </tbody>
                            @endforeach
                            @endif
                          </table>
                    @else
                        <p>You have no post.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
