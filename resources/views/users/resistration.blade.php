@extends('app')

@section('header')
    <div class="header">
      @parent

      <div class="auth_header">
        <div class="links">
          <p><a href="{{ route('session') }}">Login</a></p>
          <p><a href="{{ route('resistration')}}">Resister</a></p>
        </div>
      </div>
    </div>
@endsection

@section('content')

  <div class="auth_form">
    <div class="form_header">
      <h2>ユーザー登録</h2>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <div class="form_body">
      <form action="{{ route('signup') }}" method="post">
        @csrf
        <ul>
          <li>
            <label for="name">Name:</label>
            <input type="text" name="name">
          </li>
          <li>
            <label for="email">E-mail:</label>
            <input type="text" name="email">
          </li>
          <li>
            <label for="password">Password:</label>
            <input type="text" name="password">
          </li>
          <li>
            <label for="password_confirm">Password Confirm:</label>
            <input type="text" name="password_confirm">
          </li>
          <li>
            <input type="submit" value="resister">
          </li>
        </ul>
        
      </form>
    </div>
  </div>
@endsection
