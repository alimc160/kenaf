<aside class="sidebar">
    <div class="sidebar__backdrop"></div>
    <div class="sidebar__container">
        <div class="sidebar__top">
            <div class="container container--sm">
                <a class="sidebar__logo" href="{{route('user.dashboard')}}">
                    <img class="sidebar__logo-icon" src="{{asset('assets/img/content/logotype.svg')}}" alt="#"
                         width="44"/>
                    <div class="sidebar__logo-text">KENAF</div>
                </a>
            </div>
        </div>
        <div class="sidebar__content" data-simplebar="data-simplebar">
            <nav class="sidebar__nav">
                <ul class="sidebar__menu">
                    <li class="sidebar__menu-item">
                        <a
                            class="sidebar__link {{request()->routeIs('user.dashboard') ? "active" : ""}}"
                            href="{{route('user.dashboard')}}"
                            aria-expanded="true"
                        >
                    <span class="sidebar__link-icon">
                      <svg class="icon-icon-dashboard">
                        <use xlink:href="#icon-dashboard"></use>
                      </svg>
                    </span>
                            <span class="sidebar__link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar__menu-item " style="    position: relative;">

                        <span class="badge badge--sm badge--blue" data-dismiss="modal" data-modal="#addProductSuccess"
                              style="
    position: absolute;
    z-index: 999999;
    left: 65%;
    top: 8%;font-size: 18px;cursor: pointer;
"><b>+</b></span>

                        <a
                            class="sidebar__link"
                            href="#"
                            data-toggle="collapse"
                            data-target="#Projects"
                            aria-expanded="true"
                        >
                    <span class="sidebar__link-icon">
                      <svg class="icon-icon-cart">
                        <use xlink:href="#icon-cart"></use>
                      </svg>
                    </span>
                            <span class="sidebar__link-text">Projects</span>
                            <span class="sidebar__link-arrow">
                      <svg class="icon-icon-keyboard-down">
                        <use xlink:href="#icon-keyboard-down"></use>
                      </svg>

                    </span>
                        </a>
                        <div class="collapse show" id="Projects">
                            <ul class="sidebar__collapse-menu">
                                @if(cache()->get('projects') != null)
                                @foreach(cache()->get('projects') as $project)
                                    <li class="sidebar__menu-item" style="position: relative;">
                                        <a class="sidebar__link @if(isset($data['project']) && $project->id == $data['project']->id) active @endif"
                                           href="{{route('user.project',[$project->id])}}">
                                            <span class="sidebar__link-signal"></span>
                                            <span class="sidebar__link-text">{{$project->title}}</span>
                                        </a>
                                        <form action="{{route('user.project.destroy',$project->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button
                                                onclick="return confirm('Are you sure do want to delete it?')"
                                                class="button-icon__icon"
                                                style="
                                            position: absolute;
                                            z-index: 999999;
                                            left: 80%;
                                            top: 25%;font-size: 18px;cursor: pointer;
                                            ">
                                                <svg class="icon-icon-trash">
                                                    <use xlink:href="#icon-trash"></use>
                                                </svg>
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar__menu-item ">

                        <a
                            class="sidebar__link {{request()->routeIs('user.entities') ? "active" : ""}}"
                            href="{{route('user.entities')}}"
                            aria-expanded="true"
                        >
                            <span class="sidebar__link-icon">
                              <svg class="icon-icon-todo">
                                <use xlink:href="#icon-todo"></use>
                              </svg>
                            </span>
                            <span class="sidebar__link-text">Entities</span>
                        </a>
                    </li>
                    <li class="sidebar__menu-item">
                        <div class="media-progress p-3">
                            <h5 class="media-progress__title">
                                <span class="text-clamp">Filters</span>
                            </h5>
                        </div>
                    </li>
                    
                    @if(isset($projectId))
                        <main-filters :project_id="{{$projectId}}"></main-filters>
                    @else
                    <main-filters ></main-filters>                    
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</aside>

