<aside class="sidebar">
    <div class="sidebar__backdrop"></div>
    <div class="sidebar__container">
        <div class="sidebar__top">
            <div class="container container--sm">
                <a class="sidebar__logo" href="{{route('admin.dashboard')}}">
                    <img class="sidebar__logo-icon" src="{{asset('assets/img/content/logotype.svg')}}" alt="#" width="44" />
                    <div class="sidebar__logo-text">Kenaf</div>
                </a>
            </div>
        </div>
        <div class="sidebar__content" data-simplebar="data-simplebar">
            <nav class="sidebar__nav">
                <ul class="sidebar__menu">
                    <li class="sidebar__menu-item"><a class="sidebar__link {{request()->routeIs('admin.dashboard') ? "active" : ""}}" href="{{route('admin.dashboard')}}" aria-expanded="true"><span class="sidebar__link-icon">
                      <svg class="icon-icon-dashboard">
                        <use xlink:href="#icon-dashboard"></use>
                      </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link {{request()->routeIs('admin.users.index') ? "active" : ""}}" href="{{route('admin.users.index')}}" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-contacts">
                        <use xlink:href="#icon-contacts"></use>
                      </svg></span><span class="sidebar__link-text">Users</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
