@php
    $public='';
    if(App::environment('production'))
    $public ='main/public';
@endphp


        <!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus"> <!--<![endif]-->

<!-- Mirrored from demo.pixelcave.com/codebase/be_pages_dashboard4.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2018 21:40:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title', 'Home') | {{ config('app.name', 'Touching Lives Skills') }}</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="description"
          content="{{config('description')}}">
    <meta name="author" content="{{config('app.name')}}">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:site_name" content="{{config('app.description')}}">
    <meta property="og:description"
          content="{{config('app.description')}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="{{asset($public.'/backendDashboard/png/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{asset($public.'/backendDashboard/png/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset($public.'/backendDashboard/png/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/backendDashboard/css/codebase.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset($public.'/css/datatables.min.css')}}">
    @yield('style')
</head>
<body>
<div id="page-container"
     class="sidebar-mini sidebar-o sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
    <aside id="side-overlay">
        <div id="side-overlay-scroll">
            <div class="content-header content-header-fullrow">
                <div class="content-header-section align-parent">
                    <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout"
                            data-action="side_overlay_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <div class="content-header-item">
                        <a class="img-link mr-5" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar32" src="jpg/avatar15.jpg" alt="">
                        </a>
                        <a class="align-middle link-effect text-primary-dark font-w600"
                           href="be_pages_generic_profile.html">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</a>
                    </div>
                </div>
            </div>
            <div class="content-side">
                {{--<div class="block pull-t pul    l-r-l">
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <form action="https://demo.pixelcave.com/codebase/be_pages_generic_search.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-search"
                                       name="side-overlay-search" placeholder="Search..">
                                <span class="input-group-btn">
    <button type="submit" class="btn btn-secondary px-10">
    <i class="fa fa-search"></i>
    </button>
    </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block pull-r-l">
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="row">
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                <div class="font-size-h4">460</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                <div class="font-size-h4">728</div>
                            </div>
                            <div class="col-4">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                <div class="font-size-h4">$7,860</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <ul class="nav-users push">
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar6.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Betty Kelley
                                    <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar16.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Adam McCoy
                                    <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar4.jpg" alt="">
                                    <i class="fa fa-circle text-warning"></i> Betty Kelley
                                    <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="jpg/avatar15.jpg" alt="">
                                    <i class="fa fa-circle text-danger"></i> Albert Ray
                                    <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <ul class="list list-activity">
                            <li>
                                <i class="si si-wallet text-success"></i>
                                <div class="font-w600">+$29 New sale</div>
                                <div>
                                    <a href="javascript:void(0)">Admin Template</a>
                                </div>
                                <div class="font-size-xs text-muted">5 min ago</div>
                            </li>
                            <li>
                                <i class="si si-close text-danger"></i>
                                <div class="font-w600">Project removed</div>
                                <div>
                                    <a href="javascript:void(0)">Best Icon Set</a>
                                </div>
                                <div class="font-size-xs text-muted">26 min ago</div>
                            </li>
                            <li>
                                <i class="si si-pencil text-info"></i>
                                <div class="font-w600">You edited the file</div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-file-text-o"></i> Docs.doc
                                    </a>
                                </div>
                                <div class="font-size-xs text-muted">3 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-plus text-success"></i>
                                <div class="font-w600">New user</div>
                                <div>
                                    <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                </div>
                                <div class="font-size-xs text-muted">5 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-wrench text-warning"></i>
                                <div class="font-w600">App v5.5 is available</div>
                                <div>
                                    <a href="javascript:void(0)">Update now</a>
                                </div>
                                <div class="font-size-xs text-muted">8 hours ago</div>
                            </li>
                            <li>
                                <i class="si si-user-follow text-pulse"></i>
                                <div class="font-w600">+1 Friend Request</div>
                                <div>
                                    <a href="javascript:void(0)">Accept</a>
                                </div>
                                <div class="font-size-xs text-muted">1 day ago</div>
                            </li>
                        </ul>
                    </div>
                </div>--}}
                <div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form action="{{url('/admin/settings/password')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-name">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="side-overlay-profile-name"
                                           placeholder="Your name.."
                                           value="{{Auth::user()->first_name.' '.Auth::user()->last_name}}" readonly>
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-email">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="side-overlay-profile-email"
                                           placeholder="Your email.."
                                           value="{{Auth::user()->email}}" readonly>
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-password">Current Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="side-overlay-profile-password"
                                           name="current_password" placeholder="Current Password..">
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                                @if ($errors->has('current'))
                                    <div>
                                            <span class="text-danger text-sm">
                                                {{ $errors->first('current') }}
                                            </span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-password">New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="side-overlay-profile-password"
                                           name="password" placeholder="New Password..">
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                                @if ($errors->has('password'))
                                    <div>
                                            <span class="text-danger text-sm">
                                            {{ $errors->first('password') }}
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-15">
                                <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control"
                                           id="password-confirm"
                                           name="password_confirmation"
                                           placeholder="Confirm New Password..">
                                    <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-alt-primary">
                                        <i class="fa fa-refresh mr-5"></i> Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--<div class="block pull-r-l">
                    <div class="block-header bg-body-light">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="side-overlay-settings-status" name="side-overlay-settings-status"
                                               value="1" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Online Status</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="side-overlay-settings-public-profile"
                                               name="side-overlay-settings-public-profile" value="1">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Public Profile</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="side-overlay-settings-notifications"
                                               name="side-overlay-settings-notifications" value="1" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Notifications</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="side-overlay-settings-updates" name="side-overlay-settings-updates"
                                               value="1">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Auto updates</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="side-overlay-settings-api-access"
                                               name="side-overlay-settings-api-access" value="1" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">API Access</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="side-overlay-settings-limit-requests"
                                               name="side-overlay-settings-limit-requests" value="1">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">API Requests</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </aside>
    <nav id="sidebar">
        @includeWhen(Auth::user()->access_level>=4,'admin.partials.sidebar')
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="content-header-section">
                @if(Auth::user()->access_level>=4)
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                            data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                @endif
                {{--
                                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                                        data-action="header_search_on">
                                    <i class="fa fa-search"></i>
                                </button>
                --}}
            </div>
            <div class="content-header-section">
                <a class="btn btn-rounded btn-dual-secondary" data-toggle="layout"  href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        data-action="side_overlay_toggle"><i class="fa fa-sign-out ml-5"></i> Logout
                </a>
                <button type="button" class="btn btn-rounded btn-dual-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    {{substr(Auth::user()->first_name,0,1).'. '.Auth::user()->last_name}}<i
                            class="fa fa-angle-down ml-5"></i>
                </button>
            </div>
        </div>
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="https://demo.pixelcave.com/codebase/be_pages_generic_search.php" method="post">
                    <div class="input-group">
<span class="input-group-btn">
<button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
<i class="fa fa-times"></i>
</button>
</span>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <span class="input-group-btn">
<button type="submit" class="btn btn-secondary">
<i class="fa fa-search"></i>
</button>
</span>
                    </div>
                </form>
            </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
    </header>
    <main id="main-container">
        <div class="bg-image bg-image-bottom" style="background-image: url('jpg/photo34%402x.jpg');">
            <div class="bg-primary-dark-op">
                <div class="content content-top text-center overflow-hidden">
                    <div class="pt-50 pb-20 ">
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear"
                            data-class="animated fadeInUp">@yield('title')</h1>
                        <div id ="_"></div>
                        <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear"
                            data-class="animated fadeInUp">View your @yield('title') here!</h2>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </main>
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                <i class="fa fa-gear fa-spin text-success"></i> Designed by <a class="font-w600"
                                                                               href="{{config('app.designer_url')}}"
                                                                               arget="_blank">{{config('app.designer')}}</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">{{config('app.name')}}</a> &copy; <span
                        class="js-year-copy">{{date('Y')}}</span>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset($public.'/backendDashboard/js/codebase.min-1.4.js')}}"></script>
<script src="{{asset($public.'/js/datatables.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#general-table').DataTable();
    } );
</script>
<script>
    jQuery(function () {
        Codebase.helpers('table-tools');
    });
</script>

@yield('scripts')

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</body>
</html>