@extends('admin.layouts.master')
@section('title','Show')
@section('content')
    <div class="col-12">
        <div class="card card-order">
            <div class="card__wrapper">
                <section class="card-order__section pt-0">
                    <div class="card__container">
                        <ul class="card-order__customer-list">
                            <li class="card-order__customer-item">
                                 <b>Name:</b>  <span>{{$data["user"]->name}}</span>
                            </li>
                            <li class="card-order__customer-item">
                                 <b>Name:</b>  <span>{{$data["user"]->email}}</span>
                            </li>
                            <li class="card-order__customer-item">
                                 <b>Status:</b>  <span>{{$data["user"]->is_active == 1 ? "Active": "Disable"}}</span>
                            </li>
                            <li class="card-order__customer-item">
                                 <b>Created At:</b>  <span>{{$data["user"]->created_at}}</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection




























{{--@extends('admin.layouts.app')--}}
{{--@section('title','Show')--}}
{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12">--}}
{{--                @if(session()->has('error'))--}}
{{--                    <div class="alert alert-danger">{{session()->get('error')}}</div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="col-4">--}}
{{--                @include('admin.includes.sidebar')--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}

{{--@endsection--}}
