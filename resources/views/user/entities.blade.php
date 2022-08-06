@extends('layouts.master')
@section('title','Entities')
@section('style')
<style>
     .simplebar-wrapper{
        max-height:100vh;
    }
    </style>
@endsection
@section('content')
<br>
<div class="page-header">
    <h1 class="page-header__title">Entities Listing</h1>
</div>
<entities-listing :component_type="'page'"></entities-listing>
@endsection
@section('script')
<script src="{{ mix('js/entity_master.js') }}"></script>
<script>

</script>
@endsection