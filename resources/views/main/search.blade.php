<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    @yield('selection.css')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('theme/dist/css/adminlte.min.css') }}">

</head>

<body style=" margin-top: 10%;">
    <div class="container">
        <h2 class="text-center display-4 " style="margin: 5%; font-family:Helvetica;"><strong>GAS Search Engine</strong></h2>
        <div class="row col-md-10 offset-md-1">
            <form action="{{ route('Search-Issues') }}">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <input type="search" name="inputSearch" class="form-control form-control-lg"
                                placeholder="Type your keywords here" value="">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </form>

                            
            <a href="{{ route('userlogout') }}">Logout</a>
                  
                @if (isset($result))
                    <label>About {{ count($result) }} results</label>
                    @foreach ($result as $value)
            
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ $value->name }}
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <p>{{ Str::of($value->detail)->words(20, ' ....') }}</p>
                                </div>
                                <div class="container-fluid">
                                    <h6><strong>Branch: </strong>{{ $value->branch }} |
                                        <strong>Account: </strong>{{ $value->account }}</h6>
                                </div>
                                <a class="btn btn-info btn-sm" href="{{ url('Show-Issues/' . $value->id) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View issue
                                </a>
                            </div>
                        </div>
                     
                  
                    @endforeach
              
                    <div class="float-right" >
                        <p>{{ $result->appends($_GET)->links() }}</p>
                    
                    </div>
                   
                @endif
                
              

    <div>

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
            <script>
                $(document).ready(function(){
                
                    $('.pagination').addClass('float-right');
                })

            </script>

</body>

</html>
