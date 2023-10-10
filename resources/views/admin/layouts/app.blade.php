<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('admin.parts._head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('admin.parts._navbar')
@include('admin.parts._sidebar')
@yield('content')
@include('admin.parts._footer')
  {{-- <aside class="control-sidebar control-sidebar-dark">
  </aside> --}}
</div>
@include('admin.parts._scripts')
</body>
</html>
