@extends('layout/layout')

@section(  'GHO | Dashboard') GHO | Dashboard @endsection


@section('content')
<style>
  /* تنسيق التابات للجداول */
    .nav-item {
      margin-left: 10px;
    }
    
    .tab-content .tab-pane {
      background-color: #fff;           /* خلفية بيضا */
      border-radius: 10px 10px 0 0;       /* بوردر ريديوس 10 بكسل */
      padding: 15px;                      /* حشوة داخلية بسيطة */
    }
    </style>
</head>
<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar topbar-custom" data-navbarbg="skin6">
    
        
        @Include('layout/nav&side')
        @yield('nav&sides')
        
        
    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row align-items-center">
          <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Dashboard</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Search Results Card -->
      <div class="container my-4">
        <div id="search-results" class="card" style="display:none; position: absolute; z-index: 1050; width: 100%;">
          <div class="card-body p-2">
            <table class="table table-sm mb-0">
              <thead>
                <tr id="results-header"></tr>
              </thead>
              <tbody id="results-body"></tbody>
            </table>
          </div>
        </div>
        
        <!-- Tabs for Tables -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#ordersTab" role="tab">
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#clientsTab" role="tab">
              Clients
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#itemsTab" role="tab">
              Items
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <!-- Orders Tab -->
          <div class="tab-pane active" id="ordersTab" role="tabpanel">
            <section id="orders" class="mb-5">
              <h2 class="mb-3">Orders</h2>
              <div class="table-responsive">
                <table id="ordersTable" class="table table-striped table-bordered">
                  <thead>
                    <tr></tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </section>
          </div>
          <!-- Clients Tab -->
          <div class="tab-pane" id="clientsTab" role="tabpanel">
            <section id="clients" class="mb-5">
              <h2 class="mb-3">Clients</h2>
              <div class="table-responsive">
                <table id="clientsTable" class="table table-striped table-bordered">
                  <thead>
                    <tr></tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </section>
          </div>
          <!-- Items Tab -->
          <div class="tab-pane" id="itemsTab" role="tabpanel">
            <section id="items" class="mb-5">
              <h2 class="mb-3">Items</h2>
              <div class="table-responsive">
                <table id="itemsTable" class="table table-striped table-bordered">
                  <thead>
                    <tr></tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
      </div>
      <footer class="footer text-center fixed-bottom z-0">
        Copyrights © Saved To 
        <a href="https://www.github.com/AmrN0ur" target="_blank">Amr Nour</a>
        and
        <a href="https://www.github.com/AmrN0ur" target="_blank">Mostafa Elfaramawy</a>
      </footer>
    </div>
  </div>
  
  <button id="toggleSidebar"></button>
  
  @endsection
{{--   
  <script src="./assets/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/app-style-switcher.js"></script>
  <script src="js/waves.js"></script>
  <script src="js/sidebarmenu.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/edites.js"></script>
</body>
</html> --}}
