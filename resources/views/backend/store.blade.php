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
                    Photo upload
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
                <form class="m-form m-form--fit m-form--label-align-right" method="post" action="/cp/photo/upload" enctype="multipart/form-data">
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
                        <input class="form-control m-input" type="text" name="name" required>
                      </div>
                    </div>
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        E-mailaddress
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="email" name="email" required>
                      </div>
                    </div>
                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                    <div class="form-group m-form__group row">
                      <div class="col-10 ml-auto">
                        <h3 class="m-form__section">
                          2. Photo upload
                        </h3>
                      </div>
                    </div>
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        Thumbnail
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" type="file" name="thumb" >
                        <span class="m-form__help">
                          The thumbnail image will be placed on the website.
                          This field is not required
                        </span>
                      </div>

                    </div>
                    <div class="form-group m-form__group row">
                      <label for="example-text-input" class="col-2 col-form-label">
                        Photos that will be zipped
                      </label>
                      <div class="col-7">
                        <input class="form-control m-input" id="photo-input" name="photo[]" type="file" multiple>
                        <span class="m-form__help">
                          These photo's will be zipped and send to the user
                        </span>
                      </div>

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
                  <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                      <div class="row">
                        <div class="col-2"></div>
                        <div class="col-7">
                          <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                            Save foto's
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
