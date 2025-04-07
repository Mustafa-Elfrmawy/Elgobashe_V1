@extends('layout/layout')

@section('GHO | Dashboard')
    GHO - Orders
@endsection


@section('content')
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <header class="topbar topbar-custom" data-navbarbg="skin6">
                @Include('layout/nav&side')
                @yield('nav&sides')
                <div class="page-wrapper">
                    <div class="page-breadcrumb">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8 align-self-center">
                                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Orders</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card">
                                    <div class="card-body">
                                        <div>Search result:</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container my-4">
                        <div id="search-results" class="card"
                            style="display:none; position: absolute; z-index: 1050; width: 100%;">
                            <div class="card-body p-2">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr id="results-header"></tr>
                                    </thead>
                                    <tbody id="results-body"></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="table-container">
                            {{-- @dd($clients) --}}
                            <table class="table">
                                <thead>
                                     @foreach ($clients as $client)
                                        {{ $client->name }}
                                    @break;
                                @endforeach 
                                <tr>
                                    <th>#</th>
                                    <th>اسم العميل</th>
                                    <th>التاريخ</th>
                                    <th>المبلغ</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>أحمد علي</td>
                                    <td>10/02/1444 هـ - 05/11/2022 م</td>
                                    <td>$100</td>
                                    <td>مكتمل</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>محمد سعيد</td>
                                    <td>12/02/1444 هـ - 07/11/2022 م</td>
                                    <td>$150</td>
                                    <td>معلق</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <button id="toggleSidebar"></button>
        @endsection
