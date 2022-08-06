@extends('admin.layouts.master')
@section('title','Users')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
@endsection
@section('content')
    <a href="{{route('admin.users.create')}}" class="btn btn-success">Add User</a>
    <div class="table-wrapper">
        <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer">

                    </div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <table class="table table--lines">
                                    <thead class="table__header">
                                    <tr class="table__header-row">
                                        <th>Name</th>
                                        <th><span>Email</span></th>
                                        <th><span>Status</span></th>
                                        <th><span>Created At</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['users']['result'] as $key=>$user)
                                    <tr class="table__row">
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <label class="checkbox">
                                                <input
                                                    type="checkbox"
                                                    class="switch"
                                                    data-token="{{csrf_token()}}"
                                                    data-url="{{route('admin.users.update.status',$user->id)}}"
                                                    class="form-control switch"
                                                    {{$user->is_active == 1 ? "checked=checked" : ""}}
                                                >

                                                <span class="checkbox__marker">
                                                    <span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                  <use xlink:href="#icon-checked"></use>
                                                </svg>
                                                    </span>
                                                </span>
                                            </label>
{{--                                            <label for="switch-{{$key}}">--}}
{{--                                                <input--}}
{{--                                                    type="checkbox"--}}
{{--                                                    id="switch-{{$key}}"--}}
{{--
{{--                                                />--}}
{{--                                            </label>--}}

{{--                                            <label class="d-none" >Toggle</label>--}}
                                        </td>
                                        <td>{{$user->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.users.show',$user->id)}}"
                                               class="btn btn-success btn-sm">
                                                view
                                            </a>
                                            <form action="{{route('admin.users.destroy',$user->id)}}" method="post"
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure do you want to delete it?')"
                                                >
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 550px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">

                </div>
            </div>
        </div>
        {{$data['users']['result']->links()}}
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(".switch").on('change',function (e){
            let url =e.target.getAttribute('data-url');
            let token =e.target.getAttribute('data-token');
            let option = {
                is_active : 1,
                _token : token
            }
            if (e.target.checked){
                $.ajax({
                    url: url,
                    type: 'post',
                    data: option,
                    success: function (res){
                        toastr.success(res.message);
                    },error: function (error){
                        toastr.error(error.message);
                    }
                });
            }else {
                option.is_active = 0;
                $.ajax({
                    url: url,
                    type: 'post',
                    data: option,
                    success: function (res){
                        toastr.success(res.message);
                    },error: function (error){
                        toastr.error(error.message);
                    }
                });
            }
        });
    </script>
@endsection
















{{--@extends('admin.layouts.app')--}}
{{--@section('title','Users')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12">--}}
{{--                @if(session()->has('success'))--}}
{{--                    <div class="alert alert-success">{{session()->get('success')}}</div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="col-4">--}}
{{--                @include('admin.includes.sidebar')--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <a href="{{route('admin.users.create')}}" class="btn btn-success">--}}
{{--                            <i class="fas fa-plus-square"></i> Add New--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <table class="table">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th scope="col">#</th>--}}
{{--                                <th scope="col">Name</th>--}}
{{--                                <th scope="col">Email</th>--}}
{{--                                <th scope="col">Status</th>--}}
{{--                                <th scope="col">Created At</th>--}}
{{--                                <th scope="col">Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <div class="d-flex justify-content-center">--}}
{{--                            {{$data['users']['result']->links()}}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
