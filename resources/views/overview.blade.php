@extends('layouts.app')

@section('title', 'Overzicht')

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
  @if($folders)
    <div class="row">
      <div class="col">
        <p><strong>Naam</strong></p>
      </div>
      <div class="col">
        <p><strong>Email</strong></p>
      </div>
      <div class="col">
        <p><strong>Aantal fotos</strong></p>
      </div>
      <div class="col">
        <p><strong>Datum van verwijdering</strong></p>
      </div>
      <div class="col">
        <p><strong>Opties</strong></p>
      </div>
      <div class="col">

      </div>
      <div class="col">

      </div>
    </div>
    @foreach($folders as $folder)
      <div class="row" style="border-bottom: 1px solid #f3f3f3; padding-bottom: 5px; margin-bottom: 25px;">
        <div class="col  col-xs-12">
          <p>{{$folder->username}}</p>
        </div>
        <div class="col  col-xs-12">
          <p>{{$folder->email}}</p>
        </div>
        <div class="col  col-xs-12">
          <p>{{$folder->count_photos}}</p>
        </div>
        <div class="col  col-xs-12">
          <p>{{$folder->remove_date}}</p>
        </div>
        <div class="col  col-xs-12">
          @if($folder->send == 0)
          <a href="/cp/folder/open/{{$folder->id}}" class="btn btn-success btn-small">Openen</a>
          @else
            <a href="/cp/folder/open/{{$folder->id}}" class="btn btn-info btn-small">Openen</a>

          @endif
        </div>

        <div class="col  col-xs-12">
          @if($folder->send == 0)
          <a href="/cp/folder/send/{{$folder->id}}" class="btn btn-info btn-small">Verzenden</a>
          @else
          <a href="#" class="btn btn-success btn-small">Verzonden</a>

          @endif
        </div>

        <div class="col  col-xs-12">
          <a href="/cp/folder/delete/{{$folder->id}}" class="btn btn-danger btn-small">Verwijderen</a>
        </div>

      </div>
    @endforeach
  @else
  <div class="row">
    <div class="col">
      <div role="alert" class="alert alert-warning alert-dismissible">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
        <p>Nog geen foto's toegevoegd.</p>
      </div>
    </div>
  </div>
  @endif
</div>
@endsection
