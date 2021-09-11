@extends('app')

@section('content')
  <h1>ログイン画面</h1>
  <a href="{{ route('session') }}">Login</a>
  <a href="{{ route('resistration')}}">Resister</a>

  <form action="">
    <p>E-mail</p><input type="text" name="email">
    <p>Password</p><input type="text" name="password">
    <p><input type="submit" value="login"></p>
  </form>
@endsection
