@extends('app')

@section('content')
    <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
    <div class="panel-heading">{{ trans('forms.title_sign_in') }}</div>
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
            {!! Form::label('email', trans('forms.email')) !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <!--- Password Field --->
        <div class="form-group">
            {!! Form::label('password', trans('forms.password')) !!}
            {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <!--- Remember Checkbox --->
        <div class="form-group">
            {!! Form::checkbox('remember','value', false) !!}
            {!! Form::label('remember', trans('forms.remember')) !!}
        </div>
        <!--- Submit Field --->
        <div class="form-group">
            {!! Form::submit(trans('forms.sign_in'), ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-link" href="{{ url('/password/email') }}">{{ trans('forms.forgot_your_password') }}</a>
        </div>
        {!! Form::close() !!}
    </div>
    </div>
    </div>
    </div>
@endsection