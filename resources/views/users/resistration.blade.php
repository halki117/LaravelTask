@extends('app')


@section('content')
  <h1>ユーザー登録</h1>
  <a href="{{ route('session') }}">Login</a>
  <a href="{{ route('resistration')}}">Resister</a>

  <form action="">
    <p>Name</p><input type="text" name="name">
    <p>E-mail</p><input type="text" name="email">
    <p>Password</p><input type="text" name="password">
    <p>Password Confirm</p><input type="text" name="password_confirm">
    <input type="submit" value="login">
  </form>    
@endsection
