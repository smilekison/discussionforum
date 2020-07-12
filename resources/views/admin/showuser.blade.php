@extends('./layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>All Users</h3>
                        <table class="table table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Email Verified</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                              </tr>
                            </thead>
                            @if(count($users) > 0)
                            @foreach($users as $new)
                              <tbody>
                              <tr>
                                <td>{{$new->id}}</td>
                                <td>{{$new->name}}</td>
                                <td>{{$new->email}}</td>
                                <td>{{$new->email_verified_at}}</td>
                                <td>{!!Form::open(['action'=>['UserController@destroy', $new->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method', 'Delete')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

                                {!!Form::close() !!}</td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    @else
                        <p>No Users Found</p>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
