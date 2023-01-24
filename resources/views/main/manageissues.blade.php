@extends('layouts/layout')

@section('title', 'dashboard')

@section('selection.css')


    <link rel="stylesheet" href="{{ asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="card-body">
            <a class="btn btn-app" data-toggle="modal" data-target="#staticBackdrop1">
                <i class="fas fa-plus"></i> Add Issue
            </a>
            <a class="btn btn-app" data-toggle="modal" data-target="#staticBackdrop1">
                <i class="fa fa-upload" aria-hidden="true"></i> Import Issue
            </a>
            <a class="btn btn-app" data-toggle="modal" data-target="#staticBackdrop1">
                <i class="fa fa-upload" aria-hidden="true"></i> Export Issue
            </a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success text-center">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block text-center">
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Account</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($issue as $item)
                            <tr>
                                <th id="id">{{ $item->id }}</th>
                                <td id="name">{{ Str::of($item->name)->words(20, ' ....') }}</td>
                                <td id="details">{{ Str::of($item->detail)->words(20, ' ....') }}</td>
                                <td id="branch">{{ $item->branch }}</td>
                                <td id="account">{{ $item->account }}</td>
                                <td id="account">{{ $item->image }}</td>
                                {{-- <td class="btn-group">
                                       
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-info">Show</button>
                                        
                                </td> --}}
                                <td class="btn-group">

                                    {{-- <a href="{{ url('edit-issues/' . $item->id) }}" class="btn btn-primary">Edit</a> --}}
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#ModalEdit">
                                    edit
                                </button>

                                    <a  href="{{ url('Show-Issues/' . $item->id) }}" class="btn btn-info">Show</a>
                                  
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#ModalDelete">
                                        Delete
                                    </button>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>


    <!-- Modal Delete WARNING-->

    <div class="modal fade text-center" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{-- @foreach ($issue as $delete) --}}
                    
               
                <div class="modal-body">
                    <div class="container">
                        <h1>Are You Sure?</h1>
                        <p>Do You Really Want To Delete This record?</p>
                      
                        <div class="clearfix">
                            {{-- <a href="{{ url('delete-issues/' . $item->id) }}" class=" btn btn-primary">Yes, Delete It!</a> --}}
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>

     <!-- Modal Edit WARNING-->

     <div class="modal fade text-center" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container">
                     <h1>Are You Sure?</h1>
                     <p>Do You Really Want To Edit This record?</p>

                     <div class="clearfix">
                         {{-- <a href="{{ url('edit-issues/' . $item->id) }}" class="btn btn-primary">Edit</a> --}}
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>




    <div class="modal fade" id="staticBackdrop1" class="lg" data-backdrop="static" role="dialog" data-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header modal-lg">
                    <h5 class="modal-title" id="staticBackdropLabel"> <strong>Add Issues</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add/issues') }}" enctype="multipart/form-data" id="usercreation_form"
                        method="post">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-body" style="display: block;">
                                <div class="form-group">
                                    <label for="inputName">Name of Issue</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea id="inputDescription" id="detail" name="detail" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Branch</label>
                                    <select id="inputStatus" class="form-control custom-select" name="branch">
                                        <option selected="" disabled="">Select branch</option>
                                        <option>Baguio - Philippines</option>
                                        <option>Eagle Pass, TX - United States</option>
                                        <option>Da Nang - Vietnam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Account</label>
                                    <input type="text" id="account" name="account" class="form-control">
                                </div>

                                <div class="form-group">
                                     <label for="file">files</label>
                                     <input type="file" class="form-control" id="file" name="image" multiple/>
                                </div>

                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                                </div>
                            </div>
                    </form>
                    {{-- <form action="{{ route('add/issues') }}" enctype="multipart/form-data" id="usercreation_form"
                        method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" for="fullname" id="name" name="name" class="form-control fullname"
                                placeholder="Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <textarea for="details" id="detail" name="detail" class="form-control" placeholder="Details"></textarea>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-control role" id="role" style="width: 100%;" name="branch">
                                <option data-select2-id="35">Baguio - Philippines</option>
                                <option data-select2-id="36">Eagle Pass, TX - United States</option>
                                <option data-select2-id="37">Da Nang - Vietnam</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" for="account" id="account" name="account" class="form-control"
                                placeholder="Account">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="file" for="account" id="image" name="image" class="form-control"
                                placeholder="Upload Image">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                    </form> --}}
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('customjs')

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
    <script src="{{ asset('theme/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('custom/manageuser.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 
    <script src=".{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src=".{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('theme/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('theme/dist/js/adminlte.min.js') }}"></script>
@endsection
