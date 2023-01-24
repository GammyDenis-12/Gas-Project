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

<body style="margin-top: 4%">



    
     <div class="container">
      <a href="{{ route('Search-Issues-main') }}">Back To Search</a>
        <section class="content">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        @foreach ($result as $value)
                        <div class="col-12 col-sm-6">
                            <div class="col-12">
                                <img src="{{ asset("storage//".$value->image) }}" class="product-image" alt="Product Image">
                            </div>
                            <div class="col-12 product-image-thumbs">
                                <div class="product-image-thumb active"><img src="{{ asset("storage//".$value->image) }}"
                                        alt="Product Image"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3"> <strong> {{ $value->name }}</strong>  </h3>
                            {{-- <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                                aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                                terr.</p>
                            <hr> --}}

                            <h4 class="mt-3">Branch</h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                              <strong> {{ $value->branch }}  </strong>
                                </label>
                            </div>

                            <h4 class="mt-3">Account</small></h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-default text-center">
                                    <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                               <strong> {{ $value->account }}</strong>
                                </label>
                            </div>
                           
                           
                        </div>
                        @endforeach 
                    </div>
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link" id="product-desc-tab" data-toggle="tab"
                                    href="#product-desc" role="tab" aria-controls="product-desc"
                                    aria-selected="false">Description</a>
                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                    href="#product-comments" role="tab" aria-controls="product-comments"
                                    aria-selected="false">Comments</a>
                                <a class="nav-item nav-link active" id="product-rating-tab" data-toggle="tab"
                                    href="#product-rating" role="tab" aria-controls="product-rating"
                                    aria-selected="true">Rating</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade" id="product-desc" role="tabpanel"
                                aria-labelledby="product-desc-tab"> {{ $value->detail }} </div>
                            <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed
                                condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem,
                                ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio.
                                Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex
                                pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec
                                aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla
                                turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at
                                magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel,
                                tincidunt ipsum. </div>
                            <div class="tab-pane fade active show" id="product-rating" role="tabpanel"
                                aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere
                                elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus
                                efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut
                                molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum
                                nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut.
                                Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl.
                                Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit
                                odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur,
                                sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel
                                nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci
                                vitae vehicula placerat. </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

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

</body>

</html>
