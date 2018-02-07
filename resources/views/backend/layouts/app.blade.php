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

  <!--begin::Web font -->
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
  <script>
        WebFont.load({
          google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
          active: function() {
              sessionStorage.fonts = true;
          }
        });
  </script>
  <!--end::Web font -->
      <!--begin::Base Styles -->
      <!--begin::Page Vendors -->
  <!--end::Page Vendors -->
  <link href="{{ asset('assets/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/assets/demo/demo7/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
  <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
  </script>
  <head>

    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >
  		<!-- begin:: Page -->
  		<div class="m-grid m-grid--hor m-grid--root m-page">
  			<!-- BEGIN: Header -->
  			<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
  				<div class="m-container m-container--fluid m-container--full-height">
  					<div class="m-stack m-stack--ver m-stack--desktop">
  						<!-- BEGIN: Brand -->
  						<div class="m-stack__item m-brand ">
  							<div class="m-stack m-stack--ver m-stack--general">
  								<div class="m-stack__item m-stack__item--middle m-brand__logo">
  									<a href="/cp" class="m-brand__logo-wrapper">
  										<img alt="Logo" src="{{ asset('assets/images/favicon.png') }}"/>
  									</a>
  								</div>

  							</div>
  						</div>
  						<!-- END: Brand -->
  						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
  							<!-- BEGIN: Horizontal Menu -->
  							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
  								<i class="la la-close"></i>
  							</button>
  							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
  								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
  									<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" >
  										<a  href="/cp" class="m-menu__link">
  											<span class="m-menu__item-here"></span>
  											<span class="m-menu__link-text">
  												Dashboard
  											</span>
  										</a>
  									</li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
  										<a  href="/cp/photo" class="m-menu__link">
  											<span class="m-menu__item-here"></span>
  											<span class="m-menu__link-text">
  												Add photo's
  											</span>
  										</a>
  									</li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
  										<a  href="/cp/profile" class="m-menu__link">
  											<span class="m-menu__item-here"></span>
  											<span class="m-menu__link-text">
  												Profile
  											</span>
  										</a>
  									</li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
  										<a href="{{ url('/logout') }}" class="m-menu__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
  											<span class="m-menu__item-here"></span>
  											<span class="m-menu__link-text">
  												Logout
  											</span>
  										</a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
  									</li>
  							<!-- END: Horizontal Menu -->
  						</div>
  					</div>
  				</div>
  			</header>
  			<!-- END: Header -->



    @yield('content')

    <!-- begin::Footer -->
    			<footer class="m-grid__item		m-footer ">
    				<div class="m-container m-container--fluid m-container--full-height m-page__container">
    					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
    						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
    							<span class="m-footer__copyright">
    								&copy; <?php echo date('Y'); ?> Gerrie Turksma &nbsp;-&nbsp; Ontwikkeling:
    								<a href="https://nefkon.com" class="m-link">
    									nefkon.com
    								</a>
    							</span>
    						</div>

    					</div>
    				</div>
    			</footer>
    			<!-- end::Footer -->
    		</div>
    		<!-- end:: Page -->
    		<!-- end::Quick Sidebar -->
    	    <!-- begin::Scroll Top -->
    		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    			<i class="la la-arrow-up"></i>
    		</div>
    		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->

    		<!-- begin::Quick Nav -->
        	<!--begin::Base Scripts -->
    		<script src="{{ asset('assets/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
      <script src="{{ asset('assets/assets/demo/demo7/base/scripts.bundle.js') }}" type="text/javascript"></script>
    		<!--end::Base Scripts -->
            <!--begin::Page Vendors -->
    		<!--end::Page Vendors -->
            <!--begin::Page Snippets -->
    		<script src="{{ asset('assets/assets/app/js/dashboard.js') }}" type="text/javascript"></script>
    		<!--end::Page Snippets -->

  </body>

  </html>
