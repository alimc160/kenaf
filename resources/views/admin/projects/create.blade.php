@extends('admin.layouts.app')
@section('title','Create')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                @endif
            </div>
            <div class="col-4">
                @include('admin.includes.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.dashboard')}}">
                            Dashboard
                        </a>
                        >
                        <a href="{{route('admin.get.project')}}">
                            Projects
                        </a>
                        > Create
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.project.store')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Title</label>
                                <div class="col-md-12">
                                    <input type="text" name="title" value="{{old('title')}}"
                                           class="form-control @error('title') is-invalid @enderror"
                                           placeholder="Enter Title">
                                    <x-error-message label="title"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12 col-form-label">Type</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{old('type')}}" name="type"
                                           class="form-control @error('type') is-invalid @enderror"
                                           placeholder="Enter Type">
                                    <x-error-message label="type"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
