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
            <li class="m-nav__separator">
              -
            </li>
            <li class="m-nav__item">
              <a href="" class="m-nav__link">
                <span class="m-nav__link-text">
                  Profiel
                </span>
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
        <div class="col-xl-12 col-lg-8">
          <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
            <div class="tab-content">
              <div class="tab-pane active" id="m_user_profile_tab_1">
                <form class="m-form m-form--fit m-form--label-align-right"  method="post">
                  {{ csrf_field() }}
                  <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                      <div class="col-10 ml-auto">
                        <h3 class="m-form__section">
                          1. User details
                        </h3>
                      </div>
                    </div>
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        Full Name
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="text" name="name" value="{{Auth::user()->name}}" required>
                      </div>
                    </div>
                    @if ($errors->has('name'))
                    <div class="form-group m-form__group row">
                      <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <p>Naam mag niet leeg zijn.</p>
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        E-mailaddress
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="email" name="email" value="{{Auth::user()->email}}" required>
                      </div>
                    </div>
                    @if ($errors->has('email'))
                    <div class="form-group m-form__group row">
                      <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <p>E-mail mag niet leeg zijn.</p>
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                    <div class="form-group m-form__group row">
                      <div class="col-10 ml-auto">
                        <h3 class="m-form__section">
                          2. Nieuw wachtwoord instellen
                        </h3>
                      </div>
                    </div>
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        Password
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="password" name="password" >
                        <span class="m-form__help">
                          Huidig wachtwoord
                        </span>
                      </div>
                    </div>
                    @if ($errors->has('password') || $errors->has('password_check'))
                    <div class="form-group m-form__group row">
                      <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <p>Het huidige wachtwoord komt niet overeen.</p>
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        New password
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="password" name="new_password">
                        <span class="m-form__help">
                          Nieuw wachtwoord
                        </span>
                      </div>
                    </div>
                    @if ($errors->has('new_password'))
                    <div class="form-group m-form__group row">
                      <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <p>Het huidige wachtwoord komt niet overeen.</p>
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        Confirm password
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="password" name="confirm_password">
                        <span class="m-form__help">
                          Bevestig het nieuwe wachtwoord
                        </span>
                      </div>
                    </div>
                    @if ($errors->has('confirm_password'))
                    <div class="form-group m-form__group row">
                      <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <p>Het huidige wachtwoord komt niet overeen.</p>
                        </div>
                      </div>
                    </div>
                    @endif
                  </div>
                  <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                      <div class="row">
                        <div class="col-2"></div>
                        <div class="col-7">
                          <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                            Save changes
                          </button>
                          &nbsp;&nbsp;
                          <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end:: Body -->
@endsection
