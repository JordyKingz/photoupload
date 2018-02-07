<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
  <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
  <!-- BEGIN: Brand -->
  <div class="m-brand  m-brand--skin-light ">
    <a href="/cp" class="m-brand__logo">
      <img alt="" src="{{ asset('assets/images/favicon.png') }}"/>
    </a>
  </div>
  <!-- END: Brand -->

<!-- BEGIN: Aside Menu -->
<div id="m_ver_menu"
class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
data-menu-vertical="true"
data-menu-scrollable="true" data-menu-dropdown-timeout="500">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
      <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-redirect="true">
        <a  href="#" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-add"></i>
          <span class="m-menu__link-text">
            Add
          </span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu ">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">
            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  data-redirect="true">
              <span class="m-menu__link">
                <span class="m-menu__link-text">
                  Add
                </span>
              </span>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
              <a  href="/cp/photo" class="m-menu__link ">
                <i class="m-menu__link-icon la la-commenting"></i>
                <span class="m-menu__link-text">
                  photo's
                </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true"  data-menu-submenu-toggle="click">
        <a  href="#" class="m-menu__link m-menu__toggle">
          <i class="m-menu__link-icon flaticon-settings"></i>
          <span class="m-menu__link-text">
            Settings
          </span>
          <i class="m-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="m-menu__submenu m-menu__submenu--up">
          <span class="m-menu__arrow"></span>
          <ul class="m-menu__subnav">
            <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true" >
              <span class="m-menu__link">
                <span class="m-menu__link-text">
                  Settings
                </span>
              </span>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-redirect="true">
              <a  href="/cp/profile" class="m-menu__link">
                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                  <span></span>
                </i>
                <span class="m-menu__link-text">
                  Profile
                </span>
              </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
              <a href="{{ url('/logout') }}" class="m-menu__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                  <span></span>
                </i>
                <span class="m-menu__link-text">
                  Logout
                </span>
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <!-- END: Aside Menu -->
