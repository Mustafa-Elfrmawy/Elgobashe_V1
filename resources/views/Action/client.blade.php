@extends('layout/layout_action')

@section('content_2')
@section('title')
    GHO | Add Client Form
@endsection

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="../assets/images/logo-icon.png" alt="Logo" class="dark-logo"
                                style="width: 50px;">
                            <h3>GHO - Client</h3>
                        </div>
                        <form id="clientForm" method="POST" action="{{ route('addClient') }}" {{-- enctype="multipart/form-data" --}}>
                            @csrf
                                @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        تم اضافة العميل بنجاح
                                    </div>
                            @endif
                            <a class="back-home" role="button" title="Back Home"
                                href="{{ route('index') }}">&#8617;</a>

                            <div class="mb-3">
                                <label for="clientName" class="form-label">اسم العميل</label>
                                <input type="text" id="clientName" name="clientName" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="clientAddress" class="form-label">عنوانه</label>
                                <input type="text" id="clientAddress" name="clientAddress" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="clientName" class="form-label">رقم الهاتف</label>
                                <input type="number" id="clientName" name="phone" class="form-control">
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <button type="submit" class="btn btn-primary w-100">اضافة عميل</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
