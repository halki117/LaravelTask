@extends('app')

@section('content')

  @include('users.parts')

  <div class="auth_form">
    <div class="form_header">
      <h2>ログイン</h2>
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
    
    <div class="form_body" >
      <form action="">
        @csrf
        <ul>
          <li>
            <label for="email">E-mail:</label>
            <input type="text" name="email">
          </li>
          <li>
            <label for="password">Password:</label>
            <input type="text" name="password">
          </li>
          <li>
            <input type="submit" value="login">
          </li>
        </ul>
      </form>
    </div>
  </div>
  
@endsection
