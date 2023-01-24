@extends('layouts/layout')

@section('title', 'dashboard')

@section('content')
    <br>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> <strong> UPDATE ISSSUE</strong></h3>
            </div>
            <form action="{{ route('edit/post') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" for="fullname" id="name" name="name" class="form-control fullname"
                            placeholder="Name" value="{{ $data->name }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        {{-- <input  for="details" id="detail" name="detail" class="form-control" placeholder="Details"> --}}
                        <textarea for="details" id="detail" name="detail" class="form-control" placeholder="Details">{{ $data->detail }}</textarea>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-info-circle"></span>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="input-group mb-3"> --}}
                    <select class="form-control select2" style="width: 100%;" id="branch" name="branch">
                        <option selected="selected">{{ $data->branch }}</option>
                        <option>Baguio - Philippines</option>
                        <option>Eagle Pass, TX - United States</option>
                        <option>Da Nang - Vietnam</option>
                    </select>

                    <br>

                    {{-- </div> --}}

                    <div class="input-group mb-3">
                        <input type="text" for="account" id="account" name="account" class="form-control"
                            placeholder="Account" value="{{ $data->account }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div >
                            <img src="{{ asset("storage//".$data->image) }}" alt="fdsfdsf"
                             class="img-thumbnail w-100 shadow-1-strong mb-4">
                         </div>

                        {{-- <input type="t" for="account" id="account" name="account" class="form-control"
                            placeholder="Account" value="{{ $data->image }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div> --}}
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block" style="width:100%">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection


@section('customjs')
    <script>
        $(document).ready(function() {
            $('.select2').select2()
        })
    </script>
@endsection
