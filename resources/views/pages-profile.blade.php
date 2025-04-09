{{-- @dd($user, $department, $permation, $employee) --}}
@extends('layout/layout')

@section('GHO | Dashboard')
    GHO - Profile
@endsection


@section('content')
    <style></style>
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
            <!-- Header -->
            <header class="topbar topbar-custom" data-navbarbg="skin6">
                @Include('layout/nav&side')
                @yield('nav&sides')
                <!-- Page wrapper -->
                <div class="page-wrapper">
                    <div class="page-breadcrumb">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8 align-self-center">
                                <h3 class="page-title mb-0 p-0">Profile</h3>
                                <div class="d-flex align-items-center">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main container -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- User Profile Card -->
                            <div class="col-lg-4 col-xlg-3 col-md-5 ar-dir">
                                <div class="card border-radios">
                                    <div class="card-body profile-card">
                                        <center class="mt-4">
                                            <img src="{{ asset('storage/'.$employee->image) }}" class="rounded-circle"
                                                width="150" />
                                            <h4 class="card-title mt-2">اسم المستخدم</h4>
                                            <h6 class="card-subtitle">الوظيفة /{{$department->name}}</h6>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- Tabbed Content for Profile -->
                            <div class="col-lg-8 col-xlg-9 col-md-7 ar-dir border-radios">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#userInfo" role="tab">
                                            <span class="d-none d-sm-block">معلومات المستخدم</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#employeeInfo" role="tab">
                                            <span class="d-none d-sm-block">معلومات الموظف</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- User Information Tab - Display Only -->
                                    <div class="tab-pane active ar-dir" id="userInfo" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label class="form-label">إسم المستخدم:</label>
                                                    <p class="form-control-plaintext">{{$user->username}}</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">كلمة المرور:</label>
                                                    <p class="form-control-plaintext">********</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Employee Information Tab - Display Only -->
                                    <div class="tab-pane ar-dir" id="employeeInfo" role="tabpanel">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">رقم الموظف:</label>
                                                        <p class="form-control-plaintext">{{ $employee->id }}</p>
                                                    </div>
                                                    <label class="form-label">الاسم بالكامل:</label>
                                                    <p class="form-control-plaintext">{{ $employee->full_name }}</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">القسم:</label>
                                                    <p class="form-control-plaintext">{{ $department->name }}</p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">رقم الهاتف:</label>
                                                    <p class="form-control-plaintext">{{ $employee->phone_number }}</p>
                                                </div>
                                                {{-- <div class="mb-3">
                      <label class="form-label">البريد الإلكتروني:</label>
                      <p class="form-control-plaintext">user@example.com</p>
                    </div> --}}
                                                <div class="mb-3">
                                                  <label class="form-label">تاريخ الاضافه:</label>
                                                    @if ($employee->created_at !== null)
                                                        <p class="form-control-plaintext">{{ $employee->created_at->format('d/m/Y') }}</p>
                                                    @else
                                                        <p class="form-control-plaintext">غير متاح</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>
                            <!-- End Tabbed Content -->
                        </div>
                    </div>
                    <footer class="footer text-center">
                        Copyrights © Saved To
                        <a href="https://www.github.com/AmrN0ur" target="_blank">Amr Nour</a>
                        and
                        <a href="https://www.github.com/AmrN0ur" target="_blank">Mostafa Elfaramawy</a>
                    </footer>
                </div>
        </div>

        <button id="toggleSidebar"></button>
    @endsection
