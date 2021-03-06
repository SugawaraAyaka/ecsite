@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">ログイン画面</h3>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('ログイン', ['class' => 'btn btn-primary mt-2 offset-sm-5']) !!}
            {!! Form::close() !!}
            <p class="mt-3 offset-sm-3">{!! link_to_route('signup', 'まだ登録がお済みでない方はこちら') !!}</p>
        </div>
    </div>

@endsection
