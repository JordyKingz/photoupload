@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div id="login-wrapper">
  <div class="overlay-image">
    <a href="/"><img src="{{ asset('assets/images/favicon.png') }}" alt="Login page Nefkon logo"></a>
  </div>
</div>

<div class="login-container container">
  <div class="row">
    <div class="col-md-12">
      <h2>Inloggen</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        @if ($errors->has('email') || $errors->has('password'))
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
              <p>Deze gegevens zijn niet bij ons bekend.</p>
            </div>
          </div>
        </div>
        @endif
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="control-label">E-Mail Address</label>
          <input type="text" name="email" class="form-control" placeholder="E-mail adres" value="{{ old('email') }}" required maxlength="254" autofocus>
        </div>


        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="control-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Wachtwoord" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info btn-small">Inloggen</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <p>  &copy; <?php echo date('Y'); ?> Gerrie Turksma</p>
    </div>
  </div>
</div>
@endsection
