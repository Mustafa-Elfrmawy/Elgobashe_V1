@extends('layout/layout')

@section('GHO | Dashboard')
    GHO | Clients
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

                            {{-- <h1> {{ $clients->first()->name }}</h1> --}}

                            {{-- @foreach ($clients as $item)
                  {{$item->name}}
                  {{$item->id}}
                  @break;
              @endforeach --}}
                            {{-- @dd($clients) --}}
                            <div class="col-md-6 col-8 align-self-center">
                                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
                                      <div>
                                        Search result: 
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $msg)
                                                    <li>{{ $msg }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    @if (!is_null(session('result_search')) && count(session('result_search')) > 0)
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>اسم العميل</th>
                                                    <th>التاريخ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(session('result_search') as $client)
                                                    <tr>
                                                        <td>{{ $client->name }}</td>
                                                        @if ($client->created_at !== null)
                                                        <td>{{ $client->created_at->format('d/m/Y') }}</td>
                                                        @else
                                                        <td>غير متاح</td>
                                                    @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @elseif (!is_null(session('error')))
                                        <p>{{session('error')}}</p>
                                    @endif
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
                                        <th>اسم العميل</th>
                                        <th>التاريخ</th>
                                        <th>الحالة</th>
                                        <th>رقم الهاتف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < count($clients); $i++)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $clients[$i]->name }}</td>
                                            @if ($clients[$i] !== null && $clients[$i]->created_at)
                                                <td>{{ $clients[$i]->created_at->format('d/m/Y') }}</td>
                                                @else
                                                <td>غير متاح</td>
                                            @endif
                                            @if ($clients[$i]->status == 1)
                                                <td>نشط</td>
                                                @else
                                                <td>غير نشط</td>
                                                @endif
                                                @if ($clients[$i]->phone !== null)
                                                <td>{{$clients[$i]->phone}}</td>
                                                @else
                                                <td>غير متاح</td>
                                                @endif
                                        </tr>
                                    @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button id="toggleSidebar"></button>
            @endsection
