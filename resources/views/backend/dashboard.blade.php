@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        @include('backend.layouts.aside')
    </div>
    <div class="m-aside-menu-overlay"></div>
    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
      <!-- BEGIN: Subheader -->
      <div class="m-subheader ">
        <div class="d-flex align-items-center">
          <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
              Dashboard
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
              <li class="m-nav__item m-nav__item--home">
                <a href="/cp" class="m-nav__link m-nav__link--icon">
                  <i class="m-nav__link-icon la la-home"></i>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
              <span class="m-subheader__daterange-label">
                <span class="m-subheader__daterange-title"></span>
                <span class="m-subheader__daterange-date m--font-brand"></span>
              </span>

            </span>
          </div>
        </div>
      </div>
      <!-- END: Subheader -->
      @if(Session::has('success'))
        <div class="m-content">
          <div class="col-xl-12 col-lg-8">
            <div class="m-portlet m-portlet--full-height alert-success alert-dismissible">
              <div class="m-portlet__body text-center">
                {!! session('success') !!}
              </div>
            </div>
          </div>
        </div>
      @endif

      @if(Session::has('failed'))
        <div class="m-content">
          <div class="col-xl-12 col-lg-8">
            <div class="m-portlet m-portlet--full-height alert-danger alert-dismissible">
              <div class="m-portlet__body text-center">
                {!! session('failed') !!}
              </div>
            </div>
          </div>
        </div>
      @endif
      <div class="m-content">
<!--Begin::Section-->
        <div class="row">
          <div class="col-xl-12">
            <!--begin:: Widgets/Support Tickets -->
            @if($folders)
            <div class="m-portlet m-portlet--full-height ">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      Overzicht foto's
                    </h3>
                  </div>
                </div>
              </div>
              <div class="m-portlet__body">
                <div class="m-widget3">
                  @foreach($folders as $folder)
                  <div class="m-widget3__item">
                    <div class="m-widget3__header">
                      <div class="m-widget3__info">
                        <span class="m-widget3__username">
                          {{$folder->username}}
                        </span>
                        <br>
                        <span class="m-widget3__time">
                          {{$folder->created_at->format('d-m-Y')}}
                        </span>
                      </div>
                      @if($folder->send == 0)
                      <a href="/cp/folder/open/{{$folder->id}}" class="m-widget3__status m--font-success">
                        Openen
                      </a>
                      <a href="/cp/folder/send/{{$folder->id}}" class="m-widget3__status m--font-info">Verzenden</a>
                      @else
                      <a href="/cp/folder/open/{{$folder->id}}" class="m-widget3__status m--font-info">
                        Openen
                      </a>
                      @endif
                      <a href="/cp/folder/delete/{{$folder->id}}" class="m-widget3__status m--font-danger">Verwijderen</a>

                    </div>
                    <div class="m-widget3__header">
                      <div class="m-widget3__info">
                        <span class="m-widget3__username">
                          E-mail: {{$folder->email}} &nbsp;-&nbsp; Total photo's: {{$folder->count_photos}} &nbsp;-&nbsp; Remove date: {{$folder->remove_date}}
                        </span>
                      </div>

                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            @else
            <div class="m-portlet m-portlet--full-height alert-warning alert-dismissible">
              <div class="m-portlet__body">
                <div class="m-widget3">
                  <div class="m-widget3__item">
                    <div class="m-widget3__header">
                      <p>Nog geen foto's toegevoegd.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endif
            <!--end:: Widgets/Support Tickets -->
          </div>
        </div>
        <!--End::Section-->
      </div>
    </div>
  </div>
  <!-- end:: Body -->
@endsection
