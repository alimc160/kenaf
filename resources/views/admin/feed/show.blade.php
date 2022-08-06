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
                        <a href="{{route('admin.feed.index')}}">
                            Feed
                        </a>
                        > Show
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-fluid" src="{{$feed->image}}" alt="">
                            </div>
                            <div class="col-12">
                                <label class="font-weight-bold" for="">Title : </label> {{$feed->title}}
                            </div>
                            <div class="col-6">
                                <label class="font-weight-bold" for="">Language : </label> {{$feed->lang}}
                            </div>
                            <div class="col-12">
                                <label class="font-weight-bold" for="">Description : </label> {{$feed->description}}
                            </div>
                            <div class="col-6">
                                <label class="font-weight-bold" for="">URL : </label> <a href="{{$feed->url}}" target="_blank">Feed Link</a>
                            </div>
                            <div class="col-6">
                                <label class="font-weight-bold" for="">Src : </label> <a href="{{$feed->src}}" target="_blank">Feed src</a>
                            </div>
                            <div class="col-6">
                                <label class="font-weight-bold" for="">Updated At : </label> {{$feed->updated_at}}
                            </div>
                            <div class="col-12">
                                <label for="" class="font-weight-bold">Body  </label>
                                <p>{!! $feed->body !!}</p>
                            </div>
                            <div class="col-12">
                                <label for="" class="font-weight-bold">Body HTMl </label>
                                <p>{!! $feed->body_html !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
