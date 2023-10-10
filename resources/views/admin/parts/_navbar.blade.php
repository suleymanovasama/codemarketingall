<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('show.home') }}" target="_blank" class="nav-link"> Əsas Sayt</a>
        </li>
        <!--<div class="btn-group">-->
        <!--    <button type="button" class="btn btn-default"><i class="fa-solid fa-globe"></i> {{ app()->getLocale() }}</button>-->
        <!--    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">-->
        <!--        <span class="sr-only">Toggle Dropdown</span>-->
        <!--    </button>-->
        <!--    <div class="dropdown-menu" role="menu" style="">-->
        <!--        @foreach(config('app.langs') as $key => $value)-->
        <!--        <a href="{{route('dashboard.lang',$key)}}" class="dropdown-item">-->
        <!--            {{$value}}-->
        <!--        </a>-->
        <!--    @endforeach-->
        <!--    </div>-->
        <!--</div>-->
    </ul>
    @if (session('success'))
        <div class="alert alert-success solid text-center mx-auto" id="success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger solid text-center mx-auto" id="danger">
            {{ session('danger') }}
        </div>
    @endif
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="font-size: 25px;" data-toggle="dropdown" href="#">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('dashboard.profile.get') }}" class="dropdown-item">
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                 <i class="fa fa-user mr-3"></i> Profilim
                </h3>
              </div>
            </div>
          </a>
          <a href="{{ route('dashboard.logout') }}" class="dropdown-item">
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                    <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i> Çıxış
                </h3>
              </div>
            </div>
          </a>
      </li>
    </ul>
  </nav>
