@extends('app')

@section('content')
  
  @include('users.parts')

  <div class="auth_form">
    <div class="form_header">
      <h2>ユーザー登録</h2>
    </div>
    <div class="form_body">
      <form action="">
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
