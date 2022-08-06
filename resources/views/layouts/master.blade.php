<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">
@include('layouts.includes.user.user_style_header')
@yield('style')
{{-- PLEASE DON'T STRCUTRE OF MASTER BLADE OTHERWISE POPUPS
WILL STOP WORKING OR OTHER JS FUNCTIONLAITY WILL BREAK --}}

<body class="page-home">
    @include('layouts.includes.user.users_symbols')
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper" id="app">
        <!-- nav -->
        @include('layouts.includes.header')
        <!-- sidebar -->
        @include('layouts.includes.sidebar')

        <!-- page content -->
        <main class="page-content" >
            <div class="container">
                @yield('content')
                @include('partials.popups._add_filters_modal')
            </div>
        </main>
    </div>


    @include('partials.popups._create_project_modal')

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('layoutScript')
    @include('layouts.includes.user.user_js')
    @yield('script')
</body>

</html>
