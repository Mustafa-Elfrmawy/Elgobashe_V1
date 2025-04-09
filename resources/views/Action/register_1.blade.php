{{-- @extends('layout/layout_action')

@section('content_2')
@section('title')
    GHO | Add User Form
@endsection
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height:100vh;">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="../assets/images/logo-icon.png" alt="Logo" class="dark-logo"
                                style="width:50px;">
                            <h3>GHO - Users</h3>
                        </div>
                        <form id="userForm">

                            <a class="back-home" role="button" title="Back Home" href="{{route('index')}}">&#8617;</a>

                            <div class="mb-3">
                                <label for="userName" class="form-label">اسم المستخدم</label>
                                <input type="text" id="userName" name="userName" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="employee" class="form-label">الموظف</label>
                                <select id="employee" name="employee" class="form-control" required>
                                    <option value="">اختر الموظف</option>
                                    <!-- هنا ممكن تضيف الخيارات حسب بيانات الموظفين -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">كلمة السر</label>
                                <input type="password" id="userPassword" name="userPassword" class="form-control"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmUserPassword" class="form-label">تأكيد كلمة السر</label>
                                <input type="password" id="confirmUserPassword" name="confirmUserPassword"
                                    class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">إضافة مستخدم</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
