@extends('app')

@section('content')
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('errors.title_403') }}</div>
            <div class="panel-body">
                {{ trans('errors.403') }}
            </div>
        </div>
    </div>
    </div>
@endsection
