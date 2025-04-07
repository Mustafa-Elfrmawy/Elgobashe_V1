@extends('layout/layout_action')

@section('content_2')
    @section('title')GHO - About
    @endsection
    <body class="bg-light">
      <div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
      <div class="col-md-6">
        <div class="card shadow">
          <a class="back-home" role="button" title="Back Home" href="{{route('index')}}">&#8617;</a>
          <div class="card-body">
            <div class="text-center mb-4">
              <img src="../assets/images/logo-icon.png" alt="Logo" class="dark-logo" style="width: 50px;">
              <h3>About GHO System</h3>
            </div>
            
            <div class="dev-info card en">
              <h4>Developers Information</h4>
              
              <div class="dev-one">
                <div class="main-info">
                  <img src="../assets/images/users/default.png" alt="Dev.Picture">
                  <h6 class="name">Mostafa Elfaramawy</h6>
                </div>
                <ul class="links">
                  <!-- املأ بياناتك -->
                  <li><a href="https://www.facebook.com/" target="_blank">facebook</a></li>
                  <li><a href="https://wa.me/+201" target="_blank">whatsapp</a></li>
                  <li><a href="https://www.github.com/" target="_blank">github</a></li>
                </ul>
              </div>
              
              <hr>
              
              <div class="dev-two">
                <div class="main-info">
                  <img src="../assets/images/users/default.png" alt="Dev.Picture">
                  <h6 class="name">Amr Nour</h6>
                </div>
                <ul class="links">
                  <li><a href="https://www.facebook.com/100078891038533" target="_blank">facebook</a></li>
                  <li><a href="https://wa.me/+201029671620" target="_blank">whatsapp</a></li>
                  <li><a href="https://www.github.com/AmrN0ur" target="_blank">github</a></li>
                </ul>
              </div>
              
            </div>
            
            <hr>
            
            <div class="system-info card en">
              <h4>System Information</h4>
              
              <div class="system-version">
                System Version:
                <p>4</p>
              </div>
              <div class="server-ip">
                Server IP: 
                <p>11.22.33.44</p>
              </div>
              <div class="device-ip">
                This Device IP:
                <p>11.22.33.45</p>
              </div>
              <div class="server-status">
                Server Status: 
                <p class="status">Active</p> <!-- لو شغال هيبقى فى دايره خضره جنبه و لو لأ يبقى حمرا و لو شغال بس فى شوية تحذيرات مثلاً يبقى صفرا -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection