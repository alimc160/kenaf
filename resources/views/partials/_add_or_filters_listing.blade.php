<div class="card filtersListingWidget">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="card__header">
                                <div class="card__header-left">
                                    <h3 class="card__header-title">Filters <span class="badge badge--sm badge--blue" data-dismiss="modal" data-modal="#addNewFilter" style="margin-left:50px;font-size: 18px;cursor: pointer;
                                    "><b>+</b></span></h3>
                                </div>
                            </div>
                            <div class="card__body">
                                <div class="card__widgets">                                                                   
                                      {{-- <project-saved-filters :project_id="{{$project->id}}"></project-saved-filters>                 --}}                      
                                      @if(isset($projectId))
                                        <project-saved-filters-listing :project_id="{{$projectId}}"></project-saved-filters-listing>
                                        @else
                                        <project-saved-filters-listing ></project-saved-filters-listing>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>