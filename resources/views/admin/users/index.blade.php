@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <td>Username</td>
                                <td>Email Address</td>
                                <td>User Groups</td>
                                <td>Registration Date</td>
                            </thead>
                            </tr>
                            <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                <td>{{ $user->group->name }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                            <div style="text-align: center;">
                            {!! $users->render() !!}
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
