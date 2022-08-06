@extends('admin.layouts.app')
@section('title','Show')
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
                        > Show
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="">Title : </label> {{$project->title}}
                            </div>
                            <div class="col-6">
                                <label for="">Email : </label> {{$project->type}}
                            </div>
                            <div class="col-6">
                                <label for="">Created At : </label> {{$project->created_at}}
                            </div>
                            <div class="col-6">
                                <label for="">Updated At : </label> {{$project->updated_at}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
