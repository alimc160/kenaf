@extends('admin.layouts.app')
@section('title','Profile')
@section('scripts')
    <script src="{{asset('assets/js/custom.js')}}" defer></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                @endif
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Change Profile
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.profile.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{auth()->user()->name}}">
                                    <x-error-message label="name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Profile Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-success">Edit Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Change Password
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.password.update')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-12 col-form-label">Current Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control @error('current_pass') is-invalid @enderror" placeholder="Enter Current Password" name="current_pass" value="{{old('current_pass')}}">
                                    <x-error-message label="current_pass"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12 col-form-label">New Password</label>
                                <div class="col-12">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter New Password" name="password" value="{{old('password')}}">
                                    <x-error-message label="password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12 col-form-label">Confirm Password</label>
                                <div class="col-12">
                                    <input type="password" class="form-control @error('confirmation_password') is-invalid @enderror" placeholder="Enter Confirm Password" name="confirmation_password">
                                    <x-error-message label="confirmation_password"/>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-success">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
