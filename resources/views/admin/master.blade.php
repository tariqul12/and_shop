<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

    <title>Andshop - @yield('title')</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('/') }}admin-assets/assets/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('/') }}admin-assets/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin-assets/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href='{{ asset('/') }}admin-assets/assets/plugins/slick/slick.min.css' rel='stylesheet'>
	<link href='{{ asset('/') }}admin-assets/assets/plugins/swiper/swiper-bundle.min.css' rel='stylesheet'>

    <!-- Data Tables -->
    <link href='{{ asset('/') }}admin-assets/assets/plugins/data-tables/datatables.bootstrap5.min.css'
        rel='stylesheet'>
    <link href='{{ asset('/') }}admin-assets/assets/plugins/data-tables/responsive.datatables.min.css'
        rel='stylesheet'>

    <!-- custom css -->
    <link id="style.css" href="{{ asset('/') }}admin-assets/assets/css/style.css" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('/') }}admin-assets/assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!--  WRAPPER  -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        <div class="ec-left-sidebar ec-bg-sidebar">
            <div id="sidebar" class="sidebar ec-sidebar-footer">

                <div class="ec-brand">
                    <a href="{{ route('dashboard') }}">
                        <img class="ec-brand-icon" src="{{ asset('/') }}admin-assets/assets/img/logo/favicon.png"
                            alt="" />
                        <span class="ec-brand-name text-truncate">ANDSHOP</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="ec-navigation" data-simplebar>
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <!-- Dashboard -->
                        <li class="active">
                            <a class="sidenav-item-link" href="{{route('dashboard')}}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                            <hr>
                        </li>

                        <!-- Vendors -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-briefcase-outline"></i>
                                <span class="nav-text">User</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">

                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('user.create') }}">
                                            <span class="nav-text">Add User</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('user.index') }}">
                                            <span class="nav-text">All Customer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Users -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-account-multiple-outline"></i>
                                <span class="nav-text">Customers</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="user-card.html">
                                            <span class="nav-text">User Grid</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a class="sidenav-item-link" href="user-list.html">
                                            <span class="nav-text">User List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="user-profile.html">
                                            <span class="nav-text">Users Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                        </li>
                           <!-- banner -->
                           <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-shape"></i>
                                <span class="nav-text">Banner</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('banner.create') }}">
                                            <span class="nav-text">Add Banner</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('banner.index') }}">
                                            <span class="nav-text">All Banner</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Category -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-shape"></i>
                                <span class="nav-text">Categories</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('category.create') }}">
                                            <span class="nav-text">Add Category</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('category.index') }}">
                                            <span class="nav-text">All Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Sub Category -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-chart-bar"></i>
                                <span class="nav-text">Sub Categories</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('subCategory.create') }}">
                                            <span class="nav-text">Add SubCategory</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('subCategory.index') }}">
                                            <span class="nav-text">All SubCategory</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Brands -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-tag-outline"></i>
                                <span class="nav-text">Brands</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('brand.create') }}">
                                            <span class="nav-text">Add Brand</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('brand.index') }}">
                                            <span class="nav-text">Manage Brand</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('extra.add') }}">
                                            <span class="nav-text">All Brand</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Unit -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-receipt"></i>
                                <span class="nav-text">Unit</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('unit.create') }}">
                                            <span class="nav-text">Add Unit</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('unit.index') }}">
                                            <span class="nav-text">Manage unit</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Products -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <!-- <i class="mdi mdi-palette-advanced"></i> -->
                                <i class="mdi mdi-package-variant-closed"></i>
                                <span class="nav-text">Products</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('product.create') }}">
                                            <span class="nav-text">Add Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{route('product.index')}}">
                                            <span class="nav-text">All Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{route('product.grid')}}">
                                            <span class="nav-text">Grid Product</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Orders -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="nav-text">Orders</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{route('order.manage')}}">
                                            <span class="nav-text">Order Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Reviews -->
                        <li>
                            <a class="sidenav-item-link" href="review-list.html">
                                <i class="mdi mdi-star-circle-outline"></i>
                                <span class="nav-text">Reviews</span>
                            </a>
                        </li>

                        <!-- Transactions -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-finance"></i>
                                <span class="nav-text">Transactions</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a href="all-transactions.html">
                                            <span class="nav-text">All transactions</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="transaction-details.html">
                                            <span class="nav-text">Transaction details</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Setting -->
                        <li>
                            <a class="sidenav-item-link" href="setting.html">
                                <i class="mdi mdi-cogs"></i>
                                <span class="nav-text">Setting</span>
                            </a>
                        </li>
                        <!-- Authentication -->
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-login-variant"></i>
                                <span class="nav-text">Authentication</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a href="sign-in.html">
                                            <span class="nav-text">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="sign-up.html">
                                            <span class="nav-text">Sign Up</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Error page -->
                        <li>
                            <a class="sidenav-item-link" href="404.html">
                                <i class="mdi mdi-alert-circle-outline"></i>
                                <span class="nav-text">Error page</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            <header class="ec-main-header" id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler">
                        <img src="{{ asset('/') }}admin-assets/assets/img/icons/clops.png" alt="">
                    </button>
                    <!-- search form -->
                    <div class="search-form d-lg-inline-block">
                        <div class="input-group">
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="search.." autofocus autocomplete="off" />
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <!-- navbar right -->
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset(Auth::user()->profile_photo_path) }}" class="user-image"
                                        alt="User Image" />
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <div class="d-inline-block">
                                            <h5>{{ Auth::user()->name }}</h5>
                                            <p class="pt-2">{{ Auth::user()->email }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li class="dropdown-footer" >
                                        <form action="{{route('logout')}}" method="POST" id="loginForm" >
                                            @csrf

                                            <a href="" onclick="event.preventDefault(); document.getElementById('loginForm').submit();"> <i class="mdi mdi-logout"></i> Log Out</a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown notifications-menu custom-dropdown">
                                <button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
                                    <i class="mdi mdi-bell-ring-outline"></i>
                                </button>

                                <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                                    <div class="card-header card-header-border-bottom px-3">
                                        <h2>Notifications</h2>
                                    </div>

                                    <div class="card-body px-0 py-0">
                                        <div class="tab-content" id="myNotifications">
                                            <ul class="list-unstyled" data-simplebar style="height: 360px">
                                                <li>
                                                    <a href="javscript:void(0)"
                                                        class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('/') }}admin-assets/assets/img/user/u2.jpg"
                                                                alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Nitin</h4>
                                                                <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                    consectetur adipisicing elit. Nam itaque
                                                                    doloremque odio, eligendi delectus vitae.</p>

                                                                <span
                                                                    class="font-size-12 font-weight-medium text-secondary">
                                                                    <i class="mdi mdi-clock-outline"></i> 30 min
                                                                    ago...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)"
                                                        class="media media-message media-notification media-active">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('/') }}admin-assets/assets/img/user/u1.jpg"
                                                                alt="Image">
                                                            <span class="status active"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Lovina</h4>
                                                                <p class="last-msg">Donec mattis augue a nisl
                                                                    consequat, nec imperdiet ex rutrum. Fusce et
                                                                    vehicula enim. Sed in enim eu odio vehic.</p>

                                                                <span
                                                                    class="font-size-12 font-weight-medium text-white">
                                                                    <i class="mdi mdi-clock-outline"></i> Just
                                                                    now...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javscript:void(0)"
                                                        class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('/') }}admin-assets/assets/img/user/u5.jpg"
                                                                alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Crinali</h4>
                                                                <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                    consectetur adipisicing elit. Nam itaque
                                                                    doloremque odio, eligendi delectus vitae.</p>

                                                                <span
                                                                    class="font-size-12 font-weight-medium text-secondary">
                                                                    <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                    ago...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javscript:void(0)"
                                                        class="media media-message media-notification">
                                                        <div class="position-relative mr-3">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('/') }}admin-assets/assets/img/user/u4.jpg"
                                                                alt="Image">
                                                            <span class="status away"></span>
                                                        </div>
                                                        <div class="media-body d-flex justify-content-between">
                                                            <div class="message-contents">
                                                                <h4 class="title">Crinali</h4>
                                                                <p class="last-msg">Lorem ipsum dolor sit, amet
                                                                    consectetur adipisicing elit. Nam itaque
                                                                    doloremque odio, eligendi delectus vitae.</p>

                                                                <span
                                                                    class="font-size-12 font-weight-medium text-secondary">
                                                                    <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                                    ago...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <ul class="dropdown-menu dropdown-menu-right d-none">
                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> New user registered
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> User deleted
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-supervisor"></i> New client
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> View All </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    @yield('body')
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            <!-- Footer -->
            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        Copyright © 2023. All right reserved.
                    </p>
                </div>
            </footer>

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="{{ asset('/') }}admin-assets/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/plugins/slick/slick.min.js"></script>


    <!-- Data Tables -->
    <script src='"{{ asset('/') }}admin-assets/assets/plugins/data-tables/jquery.datatables.min.js'></script>
    <script src='"{{ asset('/') }}admin-assets/assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
    <script src='"{{ asset('/') }}admin-assets/assets/plugins/data-tables/datatables.responsive.min.js'></script>

    <!-- Chart -->
    <script src="{{ asset('/') }}admin-assets/assets/plugins/charts/Chart.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/js/chart.js"></script>

    <!-- Option Switcher -->
    <script src="{{ asset('/') }}admin-assets/assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Google map chart -->
    <script src="{{ asset('/') }}admin-assets/assets/plugins/charts/google-map-loader.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/plugins/charts/google-map.js"></script>

    <!-- Date Range Picker -->
    <script src="{{ asset('/') }}admin-assets/assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('/') }}admin-assets/assets/js/date-range.js"></script>
    <!-- custom js -->
    <script src="{{ asset('/') }}admin-assets/assets/js/custom.js"></script>

</body>


</html>
