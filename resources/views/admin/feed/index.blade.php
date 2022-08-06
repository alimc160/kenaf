@extends('admin.layouts.app')
@section('title','Feeds')
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
                                        <th scope="col">Author</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['feeds']['result'] as $feed)
                                        <tr>
                                            <th scope="row">{{++$data['i']}}</th>
                                            <td>{{$feed->title}}</td>
                                            <td>{{$feed->author}}</td>
                                            <td>
                                                <img style="max-width: 100px" src="{{$feed->image}}" alt="">
                                            </td>
                                            <td>
                                                <a href="{{route('admin.feed.show',$feed->id)}}"
                                                   class="btn btn-success btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <form class="d-inline" action="{{route('admin.feed.destroy',$feed->id)}}" method="post"
                                                >
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
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{$data['feeds']['result']->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
