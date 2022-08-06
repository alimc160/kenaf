@extends('admin.layouts.app')
@section('title','Entities')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
           
            <div class="col-4">
                @include('admin.includes.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.dashboard')}}">
                            Dashboard
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Feed</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
