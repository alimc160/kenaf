@extends('admin.layouts.master')
@section('title','Add User')
@section('content')
{{--<div class="col-12">--}}
{{--    <div class="card">--}}

{{--    </div>--}}
{{--</div>--}}
                    <div class="card-body">
                        <form action="{{route('admin.users.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name">
                                @error('name')
                                <p>
                                    <span class="text-danger">{{$message}}</span>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" value="{{old('email')}}" name="email" class="form-control" placeholder="Enter Email">
                                @error('email')
                                <p>
                                    <span class="text-danger">{{$message}}</span>
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
@endsection
