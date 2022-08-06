@if(count($data['feeds']['result']))
    @foreach($data['feeds']['result'] as $feed)
        <div class="col-12 col-sm-6 col-lg-4 pl-2 pr-2">
            <div
                class="
                                  card
                                  review-list
                                  box-shadow-none
                                  border
                                  p-3
                                "
            >
                <div class="review-list__item index-1">
                    <a
                        class="review-list__avatar color-green"
                        href="#"
                    >
                        <div class="review-list__avatar-text">
                            JH
                        </div>
                        <img
                            class="border--grey-color-3"
                            src="{{$feed->image}}"
                            alt="#"
                        />
                    </a>
                    <div class="flex-column-center">
                        <h5 class="m-0">
                            <a href="#">
                                {{--                                                                    @if(strlen($feed->title) > 7)--}}
                                {{--                                                                        {{substr($feed->title,0,7)}}......--}}
                                {{--                                                                    @else--}}
                                {{$feed->title}}
                                {{--                                                                    @endif--}}
                            </a>
                        </h5>
                       <span>{{$feed->created_at->format('j F, Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="col-12 col-sm-6 col-lg-4 pl-2 pr-2">
        <p class="d-flex ">No feed added yet.</p>
    </div>
@endif
