@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}
<!-- エラーがあった場合エラーメッセージを表示 　※書き方によって画面上部にすべてのエラーが一覧化されるのもある　-->
@if($errors->has('username'))
  <div class="error-txt">{{ $errors->first('username') }}</div>  <!--「$errors->first('username')」:$errorsの中のusernameに関するものを抽出 -->
@endif

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input']) }}
<!-- エラーがあった場合エラーメッセージを表示 -->
@if($errors->has('mail'))
  <div class="error-txt">{{ $errors->first('mail') }}</div>
@endif

{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}
<!-- エラーがあった場合エラーメッセージを表示 -->
@if($errors->has('password'))
  <div class="error-txt">{{ $errors->first('password') }}</div>
@endif

{{ Form::label('パスワード確認') }}
{{ Form::text('password_confirmation',null,['class' => 'input']) }}
<!-- エラーがあった場合エラーメッセージを表示 -->
@if($errors->has('password_confirmation'))
  <div class="error-txt">{{ $errors->first('password_confirmation') }}</div>
@endif

{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
