<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="{{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="{{ asset('theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
 <link rel="stylesheet" href="{{ asset('theme/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  @yield('selection.css')
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ asset('theme/dist/css/adminlte.min.css') }}">

 {{-- <link rel="stylesheet" href="{{ asset('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"> --}}

 <style>

button {
  background: none;
}

 </style>

</head>
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
<div class="wrapper">
   <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('theme/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('layouts.nav')
  
  @include('layouts.aside')
  <div class="content-wrapper">
    <section class="content">
    @yield('content')
    </section>
  @include('layouts.footer')
   </div>
</div>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('theme/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('theme/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('theme/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<script src="{{ asset('theme/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->

<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('theme/dist/js/pages/dashboard2.js') }}"></script> --}}
<!-- JavaScript Bundle with Popper -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}

@yield('customjs')

<script type="text/javascript">


</script>
</body>
</html>
