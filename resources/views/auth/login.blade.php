@extends('layouts.logout')

@section('content')

<p>Social Network Service</p>

{!! Form::open() !!}

<p>DAWNSNSへようこそ</p>

{{ Form::label('MailAdress') }}
{{ Form::text('mail',null,['class' => 'input']) }}
{{ Form::label('Password') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::submit('LOGIN') }}

<p><a href="/register">新規ユーザーの方はこちら</a></p>

{!! Form::close() !!}

@endsection
