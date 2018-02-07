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
  <link rel="apple-touch-icon" sizes="57x57" href="">
  <link rel="apple-touch-icon" sizes="60x60" href="">
  <link rel="apple-touch-icon" sizes="72x72" href="">
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="apple-touch-icon" sizes="114x114" href="">
  <link rel="apple-touch-icon" sizes="120x120" href="">
  <link rel="apple-touch-icon" sizes="144x144" href="">
  <link rel="apple-touch-icon" sizes="152x152" href="">
  <link rel="apple-touch-icon" sizes="180x180" href="">
  <link rel="icon" type="image/png" sizes="192x192"  href="">
  <link rel="icon" type="image/png" sizes="32x32" href="">
  <link rel="icon" type="image/png" sizes="96x96" href="">
  <link rel="icon" type="image/png" sizes="16x16" href="">
  <link rel="manifest" href="">


  <!-- Assets CSS -->
  <link href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

  <!-- CSS -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800|Merriweather:300" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/frontend/plugins.css') }}" rel="stylesheet">
  <link href="{{ asset('css/frontend/style_theme.css') }}" rel="stylesheet">
  <link href="{{ asset('css/frontend/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('css/frontend/style.min.css') }}" rel="stylesheet">

  <!-- Jquery -->
  <script src="{{ asset('assets/jquery-1.10.2/jquery-1.10.2.min.js') }}"></script>

  <!-- Plugins -->


  <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
  </script>
</head>

  <body id="top">
    <!-- Wrapper -->
    <div id="wrapper">


         <!-- Header -->
        <header id="header" class="header-transparent header-fullwidth dark">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="/" class="logo">
                            <img src="{{ asset('assets/images/png_color.png') }}" alt="">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li class="visible-md visible-lg">
                                <!--top search-->
                                <a href="#" class="toggle-item" data-target="#mainMenu" data-class="items-visible">
                                    <i class="fa fa-bars"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="menu-slide light">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/login">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="footer-light">
        <div class="copyright-content">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="copyright-text text-center">&copy; <?php echo date('Y'); ?> Gerrie Turksma </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="copyright-text text-center"><a href="mailto:info@gerrieturksma.com">info@gerrieturksma.com</a></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  Ontwikkeling:
                  <a href="https://nefkon.com" class="m-link">
                    nefkon.com
                  </a>
                </div>
              </div>

            </div>
        </div>
    </footer>
    <!-- end: Footer -->

  </div>
  <!-- end: Wrapper -->

  <!-- Go to top button -->
  <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

  <script src="{{ asset('js/plugins.js') }}"></script>

  <!--Template functions-->
  <script src="{{ asset('js/functions.js') }}"></script>

</body>

</html>
