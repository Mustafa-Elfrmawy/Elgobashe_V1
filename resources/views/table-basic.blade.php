@extends('layout/layout')

@section(  'GHO | Dashboard') GHO - Tables @endsection


@section('content')
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
                @Include('layout/nav&side')
                @yield('nav&sides')
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false">
                            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false">
                            <i class="me-3 fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Tables</span>
                          </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Orders Table</h3>
                        <div class="d-flex align-items-center">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Tables</li>
                            </ol>
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- الجدول الخاص بالطلبات -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Orders Table</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap" id="orders-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>كود الطلب</th>
                                                <th>الوصف</th>
                                                <th>تاريخ الطلب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- هتتعبى البيانات من الـ API -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
                Distributed By <a href="https://themewagon.com">ThemeWagon</a>
            </footer>
        </div>
    </div>
  @endsection