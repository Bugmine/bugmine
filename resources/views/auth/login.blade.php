@extends('app')

@section('content')
    <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['url' => 'auth/login']) !!}
        {!! Form::hidden('_token', csrf_token()) !!}
        <!--- Username Field --->
        <div class="form-group">
            {!! Form::label('email', 'Email Address:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <!--- Password Field --->
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <!--- Remember Checkbox --->
        <div class="form-group">
            {!! Form::checkbox('remember','value', false) !!}
            {!! Form::label('remember', 'Remember me') !!}
        </div>
        <!--- Submit Field --->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
        </div>
        {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
@endsection