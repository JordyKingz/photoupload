@extends('layouts.app')

@section('title', 'Profiel')

@section('content')
@if(Session::has('success'))
<div class="container">
  <div class="row text-center">
    <div class="col">
      <div role="alert" class="alert alert-success alert-dismissible">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
        {!! session('success') !!}
      </div>
    </div>
  </div>
</div>
@endif

@if(Session::has('failed'))
<div class="container">
  <div class="row text-center">
    <div class="col">
      <div role="alert" class="alert alert-danger alert-dismissible">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
        {!! session('failed') !!}
      </div>
    </div>
  </div>
</div>
@endif
<div class="container">
  <div class="row">
    <div class="col">
      <form method="post" action="" >
        {{ csrf_field() }}
        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="name">Naam:</label>
              <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
            </div>
          </div>
          @if ($errors->has('name'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <p>Naam mag niet leeg zijn.</p>
              </div>
            </div>
          </div>
          @endif
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="email">E-mailadres:</label>
              <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
            </div>
          </div>
          @if ($errors->has('email'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <p>E-mail mag niet leeg zijn.</p>
              </div>
            </div>
          </div>
          @endif
        </div>

        <h2 style="margin-top:35px;">Nieuw wachtwoord instellen</h2>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="password">Huidig wachtwoord</label>
              <input type="password" name="password" class="form-control">
            </div>
          </div>
          @if ($errors->has('password') || $errors->has('password_check'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <p>Het huidige wachtwoord komt niet overeen.</p>
              </div>
            </div>
          </div>
          @endif
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="new_password">Nieuw wachtwoord:</label>
              <input type="password" name="new_password" class="form-control">
            </div>
          </div>
          @if ($errors->has('new_password'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <p>Hier gaat wat fout.</p>
              </div>
            </div>
          </div>
          @endif
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="confirm_password">Bevestig nieuw wachtwoord:</label>
              <input type="password" name="confirm_password" class="form-control" >
            </div>
          </div>
          @if ($errors->has('confirm_password'))
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <p>Hier gaat wat fout.</p>
              </div>
            </div>
          </div>
          @endif
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Opslaan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
