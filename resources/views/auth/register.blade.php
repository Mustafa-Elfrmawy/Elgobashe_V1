<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GHO | Add User Form</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico') }}">
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body class="bg-light">
  <div class="container">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
      @endif
    <div class="row justify-content-center align-items-center" style="min-height:100vh;">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            <div class="text-center mb-4">
              <img src="{{ asset('assets/images/logo-icon.png') }}" alt="Logo" class="dark-logo" style="width:50px;">
              <h3>GHO - Users</h3>
            </div>
            <!-- نموذج إضافة مستخدم -->
            <form id="userForm" method="POST" action="{{ route('register_C') }}">
              @csrf
              <div class="mb-3">
                <label for="userName" class="form-label">اسم المستخدم</label>
                <input type="text" id="userName" name="username" class="form-control" value="{{ old('username') }}" required>
                @error('username')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="employee" class="form-label">الموظف</label>
                <select id="employee" name="manager_id" class="form-control" required>
                  <option value="">اختر الموظف</option>
                  @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ old('manager_id') == $employee->id ? 'selected' : '' }}>
                      {{ $employee->full_name }}
                    </option>
                  @endforeach
                </select>
                @error('manager_id')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <span>يرجي سرعه التعديل علي الصلاحيه اذا تم الاختيار خطأ</span> 
                <label for="employee" class="form-label">    صلاحيات الموظف</label>
                <select id="employee" name="pr_id" class="form-control" required>
                  <option value="">اختر الصلاحيه المناسبه</option>
                  @foreach ($permations as $permation)
                  @if($permation->id != 1 && $permation->permation_name != 'owner' ) 
                  <option value="{{ $permation->id }}" {{ old('permation') == $permation->id ? 'selected' : '' }}>
                    {{ $permation->permation_name }}
                  </option>
                  @endif 
                  @endforeach
                </select>
                @error('pr_id')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="userPassword" class="form-label">كلمة السر</label>
                <input type="password" id="userPassword" name="password" class="form-control" required>
                @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="confirmUserPassword" class="form-label">تأكيد كلمة السر</label>
                <input type="password" id="confirmUserPassword" name="password_confirmation" class="form-control" required>
                @error('password_confirmation')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary w-100">إضافة مستخدم</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('js/login.js') }}"></script> --}}
</body>
</html>
