<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title .' | '. config('app.name', 'Laravel') : config('app.name', 'Laravel')}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Admin Lte --> <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin_files/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet"   href="{{asset('admin_files/plugins/fontawesome-free/css/all.min.css')}}">

 @if (app()->getLocale() == 'ar')
     <!-- Load Bootstrap RTL theme from RawGit -->
         <link rel="stylesheet" href="{{asset('admin_files/css/adminlte.rtl.css')}}">
     
         <!-- Custom style for RTL -->
        <link rel="stylesheet" href="{{asset('admin_files/css/custom.css')}}">
                 <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>

    @else
        <link rel="stylesheet" href="{{asset('admin_files/css/adminlte.css')}}">

    @endif

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('admin_files/plugins/noty/noty.css')}}">
    <script src="{{ asset('admin_files/plugins/noty/noty.min.js')}}"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admin_files/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin_files/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_files/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('admin_files/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">  
    <!-- Bootstrap Switch -->
    <link rel="stylesheet" href="{{asset('admin_files/plugins/bootstrap4-toggle/css/bootstrap-switch.min.css')}}">

    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Language Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                            <i class="fas fa-globe"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-0">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a rel="alternate" class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                     <span class="d-none d-md-inline">
                               {{ $properties['native'] }}
                              </span>
                                </a>
                            @endforeach
                        </div>
                    </li>
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments fa-lg"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img  src="{{asset('admin_files/img/avatar2.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img  src="{{asset('admin_files/img/avatar2.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img  src="{{asset('admin_files/img/avatar2.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell fa-lg"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            {{--<!-- Tasks: style can be found in dropdown.less -->--}}

            <!-- User Dropdown Menu -->
            <li class="nav-item dropdown user-dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">

                    <img  src="{{asset('admin_files/img/avatar2.png')}}"
                          alt=""
                          class="img-circle elevation-2">
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right user-dropdown-menu">
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-address-card  mr-2"></i>
                        Profile

                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        {{ __('site.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>



                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
@include('layouts.admin._aside')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
    @yield('breadcrumb')

    @include('layouts.partials._session')

    <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0
        </div>
        <strong>Copyright &copy;  2019<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>,AdminLTE.io</a>
        </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>

</div>
<!-- ./wrapper -->

<script src="{{asset('admin_files/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin_files/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap Switch -->
<script src="{{asset('admin_files/plugins/bootstrap4-toggle/js/bootstrap-switch.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('admin_files/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin_files/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Scripts -->
<script src="{{ asset('admin_files/js/adminlte.js')}}"></script>
<script>

    $(document).ready(function () {
        //delete
        $('.delete').click(function (e) {
            var that = $(this)
            e.preventDefault();
            var n = new Noty({
                text: "{{__('site.confirm_delete')}}",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("{{__('site.yes')}}", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("{{__('site.no')}}", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

    });//end of ready

</script>
@stack('js')
</body>
</html>
