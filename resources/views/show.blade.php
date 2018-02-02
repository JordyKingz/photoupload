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
  <div class="row">
    <div class="col">
      <a href="/cp/overview">Terug naar Overzicht</a>
    </div>
  </div>
  <div class="row" style="margin-top: 25px;">
    <div class="col">
      <h3>Folder geopend van: {{$folder->username}}</h3>
    </div>
  </div>
  @foreach($photos as $photo)
    <div class="row" style="border-bottom: 1px solid #f3f3f3; padding-bottom: 5px; margin-bottom: 15px; margin-top: 10px;">
      <div class="col">
        <img src="/storage/{{$folder->folder_name}}/{{$photo->name}}" alt="">
      </div>
    </div>
  @endforeach
</div>
@endsection
