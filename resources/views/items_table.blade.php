@extends('layout/layout')

@section('GHO | Dashboard')
    GHO | Items
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
                                            <li class="breadcrumb-item active" aria-current="page">Items</li>
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
                                        {{-- @dd($items) --}}
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الصنف</th>
                                        <th>رقم الصنف</th>
                                        <th>تاريخ الانشاء</th>
                                        <th>سعره</th>
                                        {{-- <th>الحالة</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!is_null($items) && count($items) > 0)
                                        @foreach ($items as $item)
                                        <tr>
                                          <td>{{ $item->id }}</td>
                                          <td>{{ $item->item_name }}</td>
                                          <td>{{ $item->item_number }}</td>
                                          @if (!is_null($item->created_at))
                                          <td>{{ $item->created_at->format('d/m/Y') }} هـ -
                                            {{ $item->created_at->format('d/m/Y') }} م</td>
                                            @else
                                            <td>غير متاح</td>
                                            @endif
                                            <td>{{ $item->price }}</td>
                                            {{-- @if ($item->status > 0)
                                            <td>متاح</td>
                                            @else
                                            <td>غير متاح</td>
                                            @endif --}}
                                          </tr>
                                          @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">لا توجد بيانات</td>
                                            </tr>
                                        @endif
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>


                <button id="toggleSidebar"></button>

            @endsection
