<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard.index') }}" class="brand-link">
      <p class="brand-text font-weight-light ml-5">Admin Panel </p>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
{{--          <a class="d-block ml-3">{{ auth()->user()->name_surname }}</a>--}}
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link @if(Request::segment(2) == (''))active @endif">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Əsas Səhifə
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.contact.index') }}" class="nav-link @if(Request::segment(2) == ('contact'))active @endif">
                 <i class="nav-icon fa-solid fa-message"></i>
                  <p>
                    Əlaqə
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.static.index') }}" class="nav-link @if(Request::segment(2) == ('static'))active @endif">
                    <i class="nav-icon fa-solid fa-message"></i>
                    <p>
                        Statics
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.logo.index') }}" class="nav-link @if(Request::segment(2) == ('logo'))active @endif">
                    <i class="nav-icon fa-solid fa-message"></i>
                    <p>
                        Logolar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.homeimg.index') }}" class="nav-link @if(Request::segment(2) == ('homeimg'))active @endif">
                    <i class="nav-icon fa-solid fa-message"></i>
                    <p>
                       Ana səhifədəki şəkillər
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.subscribe.index') }}" class="nav-link @if(Request::segment(2) == ('subscribe'))active @endif">
                 <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Abunələr
                  </p>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(2) == ('setting')) menu-is-opening menu-open @endif">
                <a href="#" class="nav-link @if(Request::segment(2) == ('setting'))active @endif">
                    <i class="nav-icon fa-solid fa-gear"></i>
                    <p>
                        Parametrlər
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('dashboard.setting.create') }}" class="nav-link @if(Request::segment(2) == ('setting') and Request::segment(3)=="create")active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Yeni Parametr</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dashboard.setting.index')}}" class="nav-link @if(Request::segment(2) == ('setting') and Request::segment(3) == '')active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Bütün Parametrlər</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
      </nav>
    </div>
  </aside>
