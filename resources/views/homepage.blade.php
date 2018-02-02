@extends('layouts.app')

@section('title', 'Dashboard')

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
      <form method="post" action="/cp/photo/upload" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="name">Naam:</label>
              <input type="text" name="name" class="form-control" placeholder="Naam:" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="email">E-mailadres:</label>
              <input type="email" name="email" class="form-control" placeholder="E-mailadres" required>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col">
              <div class="file-loading">
                <input id="photo-input" name="photo[]" type="file" multiple>
              </div>
              <div id="errorBlock" class="help-block"></div>
              <script>
              $(document).on('ready', function() {
                $("#photo-input").fileinput({
                  showPreview: false,
                  allowedFileExtensions: ["jpg", "jpeg", "gif", "png"],
                  elErrorContainer: "#errorBlock"
                });
              });
              </script>
            </div>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Foto's toevoegen</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
