@extends('layout/layout')

@section(  'GHO | Dashboard') GHO - Error @endsection


@section('content')

<style>
        footer a {
            color: green !important;
        }

        footer a:hover {
            color: rgb(0, 185, 0) !important;
        }
    </style>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="main-wrapper">
            <!-- Preloader -->
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            <!-- Preloader -->
            <!-- Error box -->
            <div class="error-box">
                <div class="error-body text-center">
                    <h1 class="error-title">404</h1>
                    <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
                    <p class="text-muted mb-4 mt-4">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                    <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light mb-4 text-white">Back to home</a>
                </div>
                <footer class="footer text-center w-100">
                    Contact Admin on <a href="https://wa.me/+201029671620">Amr Nour</a> or <a href="https://wa.me/+201068869740">Mostafa Elfaramawy</a>
            </footer>
        </div>
        <!-- Error box -->
    </div>
    @endsection