@extends('app')

@section('content')
  
  @if ($current_user['name'])
      <p>{{ $current_user['name'] }}</p>
  @endif

  <div class="loggedin_message">
    <h1>You are logged in!!</h1>
  </div>
  
@endsection
