@extends('layouts/layout')

@section('title','dashboard')

@section('selection.css')
<link rel="stylesheet" href="{{ asset('theme/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection

@section('content')

<div class="row">
    <div class="card-body">
        <a class="btn btn-app" data-toggle="modal" data-target="#staticBackdrop1">
            <i class="fas fa-plus"></i> Add New User
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
            <div class="row">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full  Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>                       
                    </thead>
                    <tbody>  
                      @foreach ($data as $usercreations)             
                        <tr>
                        <th id="id">{{ $usercreations->id}}</th>
                        <td id="fullname">{{ $usercreations->fullname }}</td>
                        <td id="email">{{ $usercreations->email }}</td>
                        <td id="role">{{ $usercreations->role }}</td>
                        <td>
                              <a href="{{ url('delete-student/' .$usercreations->id) }}" class="btn btn-danger">Delete</a>|
                              <a href="{{ url('admin/dasboard/edit-user/' .$usercreations->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        </tr>
                      @endforeach 
                    </tbody>
                </table>
            </div>
         
        </div>
        
    </div>
</div>



{{-- modal content --}}
<div class="modal fade" id="staticBackdrop1" class="md"  data-backdrop="static"  role="dialog" data-keyboard="false"  aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header modal-lg">
          <h5 class="modal-title" id="staticBackdropLabel"> <strong>Create New User</strong> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('user/creation') }}" id="usercreation_form" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="text" for="fullname" id="fullname" name="fullname" class="form-control fullname" placeholder="Full name">
              <div class="input-group-append">
              <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="email" for="email" id="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-envelope"></span>
            </div>
            </div>
            </div>
     
            <div class="input-group mb-3">
                  <select class="form-control role" id="role" style="width: 100%;" name="role">
                    <option data-select2-id="35">Admin</option>
                    <option data-select2-id="36">User</option>
                    </select>
              </div>
          
            <div class="input-group mb-3">
            <input type="password" for="password" id="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" for="password_confirmation" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
            </div>
            </div>    
            <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            </div>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
    
   {{-- modal for edit --}}
   <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" id="editform">
          <div class="card-body register-card-body">
             <p class="login-box-msg">Update user</p>
             <form action="../../index.html" method="post">
                <div class="input-group mb-3">
                   <input type="text" class="form-control" placeholder="Full name">
                   <div class="input-group-append">
                      <div class="input-group-text">
                         <span class="fas fa-user"></span>
                      </div>
                   </div>
                </div>
                <div class="input-group mb-3">
                   <input type="email" class="form-control" placeholder="Email">
                   <div class="input-group-append">
                      <div class="input-group-text">
                         <span class="fas fa-envelope"></span>
                      </div>
                   </div>
                </div>
                <div class="input-group mb-3">
                   <input type="password" class="form-control" placeholder="Password">
                   <div class="input-group-append">
                      <div class="input-group-text">
                         <span class="fas fa-lock"></span>
                      </div>
                   </div>
                </div>
                <div class="input-group mb-3">
                   <input type="password" class="form-control" placeholder="Retype password">
                   <div class="input-group-append">
                      <div class="input-group-text">
                         <span class="fas fa-lock"></span>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-8">
                      <div class="icheck-primary">
                         <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                      </div>
                   </div>
                   <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
@endsection