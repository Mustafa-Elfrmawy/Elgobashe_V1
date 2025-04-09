
{{-- @dd($department) --}}
@extends('layout/layout_action')

@section('content_2')
@section('title')
    GHO | نموذج إضافة موظف
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
                            <h3>GHO - نموذج إضافة موظف</h3>
                        </div>
                        <form id="employeeForm" method="POST" action="{{ route('addEmployee') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    تم اضافة الموظف بنجاح
                                </div>
                            @endif

                            <a class="back-home" role="button" title="Back Home" href="{{route('index')}}">&#8617;</a>

                            <div class="mb-3">
                                <label for="employeeName" class="form-label">اسم الموظف</label>
                                <input type="text" id="employeeName" name="employeeName" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="department" class="form-label">القسم</label>
                                <select id="department" name="department" class="form-control" required>
                                    
                                    <option value="">اختر القسم</option>
                                    @foreach ($department as $department)
                                    @if($department->name  !== "صاحب المنشأه") {
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    }
                                    @endif
                                    @endforeach
                                    {{-- <option value="sales">المبيعات</option>
                                    <option value="accounting">المحاسبة</option>
                                    <option value="marketing">التسويق</option> --}}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">رقم الهاتف</label>
                                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">العنوان</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="employeeImage" class="form-label">صورة الموظف</label>
                                <input type="file" id="employeeImage" name="employeeImage" class="form-control"
                                    style="direction: ltr;">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">حفظ الموظف</button>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
