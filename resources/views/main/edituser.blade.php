@extends('layouts/layout')

@section('title', 'dashboard')

@section('content')
<br>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <strong>  Update User </strong></h3>
        </div>
     <form action="" method="POST">
        @csrf
        <input type="hidden" name="id" value="">
        <div class="card-body">
            <div class="input-group mb-3">
                <input type="text" for="fullname" id="fullname" name="fullname" class="form-control fullname"
                    placeholder="Fullname" value="{{ $data->fullname }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="text" for="email" id="email" name="email" class="form-control fullname"
                    placeholder="Email" value="{{ $data->email }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>

            {{-- <div class="input-group mb-3"> --}}
                <select class="form-control select2" style="width: 100%;" id="role" name="role"   placeholder="Role"> 
                    <option selected="selected">{{ $data->role }}</option>
                    <option>User</option>
                    <option>Admin</option>
                  </select>
            
                <br>
                
            {{-- </div> --}}

            {{-- <div class="input-group mb-3">
                <input type="text" for="account" id="account" name="account" class="form-control"
                    placeholder="Account" value="">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div> --}}
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </div>
    </form>
    </div>
    </div>
</div>
@endsection


@section('customjs')


<script>

    $(document).ready(function(){
      $('.select2').select2()
    })
    </script>
@endsection
