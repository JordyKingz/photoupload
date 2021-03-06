<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="author" href="" />
  <link rel="canonical" href="" />
  <!-- Facebook Meta Info -->
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="">
  <meta property="og:title" content="">
  <meta property="og:site_name" content="">
  <meta property="og:see_also" content="">
  <!-- Google+ Meta Info -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">
  <!-- Twitter Meta Info -->
  <meta name="twitter:card" content="">
  <meta name="twitter:url" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="">
  <meta name="theme-color" content="#ffffff">

  <title>Gerrie Turksma - @yield('title')</title>

  <!-- Favicons / icons -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
  <link rel="manifest" href="{{ asset('assets/images/favicon.png') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">

  <!-- Assets CSS -->
  <link href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap-fileinput/css/fileinput.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

  <!-- CSS -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">

  <!-- Jquery -->
  <script src="{{ asset('assets/jquery-1.10.2/jquery-1.10.2.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('assets/bootstrap-fileinput/js/plugins/piexif.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap-fileinput/js/plugins/sortable.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap-fileinput/js/plugins/purify.min.js') }}"></script>
  <script src="{{ asset('assets/popper/popper.min.js') }}"></script>

  <script src="{{ asset('assets/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap-fileinput/js/fileinput.min.js') }}"></script>

  <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
  </script>
  <head>

  <body id="top">
    @yield('content')
  </body>

  </html>
