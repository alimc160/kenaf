@extends('admin.layouts.app')
@section('title','Projects')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
            </div>
            <div class="col-4">
                @include('admin.includes.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.project.create')}}" class="btn btn-success">
                            <i class="fas fa-plus-square"></i> Add New
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['projects']['result'] as $project)
                                <tr>
                                    <th scope="row">{{++$data['i']}}</th>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->type}}</td>
                                    <td>
                                        <a href="{{route('admin.project.show',$project->id)}}"
                                           class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <form action="{{route('admin.project.destroy',$project->id)}}" method="post"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure do you want to delete it?')"
                                            >
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{$data['projects']['result']->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
