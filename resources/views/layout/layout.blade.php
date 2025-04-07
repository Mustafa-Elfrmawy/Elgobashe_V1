<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin">
<meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
<meta name="robots" content="noindex,nofollow">
<meta name="keywords" content="bootstrap, admin dashboard, user info, employee info">
<meta name="description" content="Display user information and associated employee information">
<meta charset="utf-8">
<meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard">
<meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('GHO | Dashboard' , 'GHO | Dashboard')</title>    
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/chartist/dist/chartist.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
<link rel="canonical" href="https://example.com" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico') }}">

@yield('content')

<!-- <title>GHO | Clients</title> -->
<!-- <title>GHO | Dashboard</title> -->
<!-- <title>GHO | Items</title> -->
<!-- <title>GHO - Orders</title> -->
<!-- <title>GHO | Error</title> -->
<!-- <title>GHO | Profile</title> -->
<!-- <title>GHO - Tables</title> -->





<script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/edites.js') }}"></script>
<script src="{{ asset('js/tables.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/app-style-switcher.js') }}"></script>
    <script>
        $(document).ready(function(){
            $.get('/api/orders', function(data) {
                var tbodyHtml = '';
                if(data.length === 0){
                    tbodyHtml = '<tr><td colspan="4">لا توجد بيانات</td></tr>';
                } else {
                    data.forEach(function(item){
                        tbodyHtml += '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.order_code + '</td>' +
                        '<td>' + item.gloss + '</td>' +
                        '<td>' + item.date + '</td>' +
                        '</tr>';
                    });
                }
                $('#orders-table tbody').html(tbodyHtml);
            });
        });
        </script>

        <script>
            $(".preloader").fadeOut();
        </script>
<script>
    window.onpopstate = function() {
        window.location.href = "{{ route('login') }}";
    };
</script>

</body>
</html>



