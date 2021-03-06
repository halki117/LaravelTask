@extends('app')

@section('header')
    <div class="header">
      @parent

      <div class="navlink">
        @if ($current_user['name'])
          <div class="current_user_name">
          {{-- 　現在ログイン中のユーザー情報を $current_user に格納、こちらは AppServiceProvider.phpで定義している --}}
            <p>{{ $current_user['name'] }}</p>
          </div>
          <div class="logout">
            <a href="#"><p>ログアウト</p></a>
          </div>
        @endif
      </div>
    </div>
@endsection


@section('content')

  <div class="loggedin_message">
    <h1>You are logged in!!</h1>
  </div>
  
@endsection
