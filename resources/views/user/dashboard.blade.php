@extends('layouts.master')
@php
$project = null;

if ( cache()->get('projects') != null && count(cache()->get('projects'))){
$project = cache()->get('projects')->find(request()->segment(count(request()->segments())));
}
@endphp
@if($project != null)
@section('title',$project->title)
@else
@section('title','Dashboard')
@endif
@section('style')
<style>
    .entityListingWidget .simplebar-wrapper {
        max-height: 300px;
    }

      .filtersListingWidget .simplebar-wrapper {
        max-height: 300px;
    }

    .card__container .row,.gutter-bottom-sm{
        max-height: 300px;
        overflow: auto;
    }
</style>
@endsection
@section('content')
<section class="section">
    <div class="section__title d-none">
        <h2>Section</h2>
    </div>
    <div class="row justify-content-center gutter-bottom-xl">
        <div class="col-12 col-lg-7 col-xl-8">
            
                                <feed-listing :component_type="'main_feed'"></feed-listing>
                         
            <br>
          
                                <feed-listing ></feed-listing>
                         
        </div>
        <div class="col-12 col-lg-5 col-xl-4 d-flex flex-column">
            @include('partials._graph')
            <br />
            @include('partials._add_or_filters_listing')
            <br>
            @include('partials._get_entities_data',['entities'=>$data['entitiesResult']])
        </div>
    </div>
</section>
 

@endsection

@section('layoutScript')
<script src="{{ mix('js/dashboard_master.js') }}"></script>
@endsection
@section('script')
<script>
    function getEntities(request){
            let url="{{route('user.dashboard')}}";
            $.get(url,request).then(function (res){
                $("#entities-data").html(res);
            }).fail(function (error){
                console.log(error);
            });
        }
        $("#more-entities").on('click',function (e){
            e.preventDefault();
            $("#less-entities").removeClass('d-none');
            $(this).addClass('d-none');
            let request = {
                value : $(this).data('value')
            }
            getEntities(request);
        });
        $("#less-entities").on('click',function (e){
           e.preventDefault();
            $("#more-entities").removeClass('d-none');
            $(this).addClass('d-none');
            let request = {
                value : $(this).data('value')
            }
            getEntities(request);
        });
</script>
@endsection