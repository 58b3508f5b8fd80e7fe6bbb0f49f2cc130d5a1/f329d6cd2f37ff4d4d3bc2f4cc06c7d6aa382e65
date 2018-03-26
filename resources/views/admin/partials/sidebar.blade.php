<div id="sidebar-scroll">
    <div class="sidebar-content">
        <div class="content-header content-header-fullrow px-15">
            <div class="content-header-section sidebar-mini-visible-b">
<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
<span class="text-dual-primary-dark">t</span><span class="text-primary">s</span>
</span>
            </div>
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                        data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="{{url('/')}}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">tl</span><span
                                class="font-size-xl text-primary">skills</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{asset($public.'/backendDashboard/png/default-user.png')}}" alt="">
            </div>
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="{{url('/admin')}}">
                    <img class="img-avatar" src="{{asset($public.'/backendDashboard/png/default-user.png')}}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                           href="{{url('/admin')}}">{{substr(Auth::user()->first_name,0,1).'. '.Auth::user()->last_name}}</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                           data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="" href="{{url('/admin')}}"><i class="si si-cup"></i><span
                                class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span
                                class="sidebar-mini-hide">Users</span></a>
                    <ul>
                        <li>
                            <a href="{{url('/admin/user/view')}}">View</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/user/create')}}">Create</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span
                                class="sidebar-mini-hide">Centres</span></a>
                    <ul>
                        <li>
                            <a href="{{url('/admin/centre/view')}}">View</a>
                        </li>
{{--                        <li>
                            <a href="{{url('/admin/centre/create')}}">Create</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/centre/assign')}}">Assign Centre</a>
                        </li>--}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>