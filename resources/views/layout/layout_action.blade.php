<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title' , 'GHO')</title>
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico') }}">
<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
<style>
    .system-info p {
      display: inline-block;
    }
  </style>
</head>

@yield('content_2')

{{-- <title>GHO | About</title> --}}
{{-- <title>GHO | نموذج إضافة موظف</title> --}}
{{-- <title>GHO | Add Order Form</title> --}}
{{-- <title>GHO | Add User Form</title> --}}









<script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
