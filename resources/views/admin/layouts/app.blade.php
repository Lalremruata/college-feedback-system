<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/ico" />

    <title>@yield('title') </title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('css/green.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-forms.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">
</head>

<body class="nav-md w3-white">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('/') }}" class="site_title"><i class="fa fa-tachometer"></i> <span>Feedback System</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome, <strong class="w3-text-amber">{{ Auth::user()->name }}</strong></span>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-edit"></i> Manage Department <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{!! url('/dashboard/department/add-department') !!}">Add Department</a></li>
                                    <li><a href="{!! route('departments.index') !!}">View All</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Manage Faculty <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{!! url('/dashboard/add-faculty') !!}">Add Faculty</a></li>
                                    <li><a href="#">View All</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Manage Student <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{!! url('/dashboard/add-student') !!}">Add Student</a></li>
                                    <li><a href="#">View All</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Manage Course <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{!! url('/dashboard/add-course') !!}">Add Course</a></li>
                                    <li><a href="#">View Course</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Manage Admin <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{!! url('/dashboard/add-admin') !!}">Add Admin</a></li>
                                    <li><a href="#">Reset Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="w3-hover-red"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {!! csrf_field() !!}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right" style="padding-right: 15px">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {!! csrf_field() !!}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- body -->
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @include('admin.department.partials._messages')
                @section('body')
                @show
            </div>
        </div>

        <!-- footer content -->
        <!--

        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        -->
        <!-- /footer content -->
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/date_time.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/holder.min.js') }}"></script>
<script src="{{ asset('js/fontawesome.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>

<script>
    $(function () {
        var side = $('.main_menu_side');
        side.clientWidth == 0;
        $('.fa-bars').click(function () {
            if(side.clientWidth == 0){
                $('#sidebar-logout').show();
            }
            else
                $('#sidebar-logout').hide();
        });
    });
</script>
<script>
    $('#form').parsley();
    $(document).ready(function() {
        $('#table').DataTable({
            "pageLength":20
        });
    } );
</script>
</body>
</html>
