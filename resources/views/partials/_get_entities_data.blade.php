{{-- <div class="col-12 col-lg-5 col-xl-4"> --}}
    <div class="card">
        <div class="card__wrapper">
            <div class="card__container">
                <div class="card__header">
                    <div class="card__header-left d-flex w-100">
                        <h3 class="card__header-title w-50">Entities </h3>
                    </div>
                </div>
                <div class="card__body">
                    <div class="card__widgets entityListingWidget" id="Entities">
                        <entities-listing></entities-listing>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}


{{-- @forelse ($data['entitiesResult'] as $entity)
        <tr class="table__row">
            <td class="table__td">
                @if(strlen($entity->title) > 24)
                    <span class="">{{substr($entity->title,0,24)}}...</span>
@else
<span class="">{{$entity->title}}</span>
@endif
</td>
</tr>
@empty
<p>No Entities generated yet.</p>
@endforelse
--}}