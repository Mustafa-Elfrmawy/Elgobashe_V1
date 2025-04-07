@section('nav&sides')
    <?php
    $count = 1;
    ?>
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand logo-box-custom" href="{{ route('index') }}">
                <b class="logo-icon">
                    <img src="./assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                </b>
                <span class="logo-text">
                    <img src="./assets/images/logo-text.png" width="190" alt="homepage" class="dark-logo site-logo" />
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav me-auto mt-md-0">
                <li class="nav-item hidden-sm-down">
                    <form class="app-search ps-3" method="POST" action="{{ route('search_client') }}">
                        @csrf
                        <input type="text" name="search" class="form-control search-input" placeholder="Search for..."
                            required>

                        @if ($count == 1)
                            <select name="search-about" id="search-about" class="form-control">
                                <option value="clients">Clients</option>
                                <option value="items">Items</option>
                                <option value="employees">Employees</option>
                                <option value="orders">Orders (by Code)</option>
                            </select>
                        @endif

                        <button type="submit" class="srh-btn"><i class="ti-search"></i></button>
                    </form>

                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark revers-selection"
                        href="{{ route('pages-profile') }}" id="navbarDropdown" role="button" aria-expanded="false">
                        <img src="./assets/images/users/default.png" alt="user" class="profile-pic me-2"
                            id="userProfilePic">
                        <span id="usernameDisplay">User Name</span>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" id="logout-button" class="btn btn-danger ms-3">Logout</button>
                        {{-- <script>
                        (function() {
                            window.history.pushState(null, null, window.location.href);
                            window.onpopstate = function() {
                                window.history.pushState(null, null, window.location.href);
                            };
                        })();
            
                        function clearHistoryOnLogout() {
                            window.history.pushState(null, null, '/');
                        }
            
                        document.getElementById('logout-button').addEventListener('click', clearHistory);
                    </script> --}}
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index') }}"
                            aria-expanded="false">
                            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <hr>
                    <p class="tables-title">Tables</p>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="{{ route('orders_table') }}"
                            data-target="#orders">
                            <i class="me-3 fa fa-list"></i>
                            <span class="hide-menu">Orders</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="{{ route('clients_table') }}"
                            data-target="#clients">
                            <i class="me-3 fa fa-user"></i>
                            <span class="hide-menu">Clients</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="{{ route('items_table') }}"
                            data-target="#items">
                            <i class="me-3 fa fa-cube"></i>
                            <span class="hide-menu">Items</span>
                        </a>
                    </li>
                    <p class="tables-title">Action</p>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('client') }}"
                            aria-expanded="false">
                            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">AddClient</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('employee') }}"
                            aria-expanded="false">
                            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">AddEmployee</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('order') }}"
                            aria-expanded="false">
                            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">insertOrder</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('register_1') }}"
                            aria-expanded="false">
                            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                            <span class="hide-menu">AddUser</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
@endsection



















{{-- @section('nav&sides')
<nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin6">
      <a class="navbar-brand logo-box-custom" href="{{route('index')}}">
        <b class="logo-icon">
          <img src="./assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
        </b>
        <span class="logo-text">
          <img src="./assets/images/logo-text.png" width="190" alt="homepage" class="dark-logo site-logo" />
        </span>
      </a>
      <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)">
        <i class="ti-menu ti-close"></i>
      </a>
    </div>
<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
    <ul class="navbar-nav me-auto mt-md-0">
      <li class="nav-item hidden-sm-down">
        <form class="app-search ps-3">
          <input type="text" class="form-control search-input" placeholder="Search for...">
          <a class="srh-btn"><i class="ti-search"></i></a>
          <select name="search-about" id="search-about">
              <option value="clients">Clients</option>
              <option value="items">Items</option>
              <option value="employees">Employees</option>
              <option value="orders">Orders (by Code)</option>
            </select>
        </form>
    </li>
</ul>
<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect waves-dark revers-selection" href=" {{route('pages-profile')}}" id="navbarDropdown" role="button" aria-expanded="false">
            <img src="./assets/images/users/default.png" alt="user" class="profile-pic me-2" id="userProfilePic">
            <span id="usernameDisplay">User Name</span>
        </a>
        <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
    </li>
</ul>
</div>
</nav>
</header>

<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('index')}}" aria-expanded="false">
                        <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <hr>
                <p class="tables-title">Tables</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <li class="sidebar-item">
                    <button type="submit" class="sidebar-link waves-effect waves-dark"></button>
                    <i class="me-3 fa fa-list">
                    </i>
                    <span class="hide-menu">Orders</span>
                </li>
                </form>                
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('orders_table')}}" data-target="#orders">
                        <i class="me-3 fa fa-list"></i>
                        <span class="hide-menu">Orders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('clients_table')}}" data-target="#clients">
                        <i class="me-3 fa fa-user"></i>
                        <span class="hide-menu">Clients</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('items_table')}}" data-target="#items">
                        <i class="me-3 fa fa-cube"></i>
                        <span class="hide-menu">Items</span>
                    </a>
                </li>
                
                <p class="tables-title">Action</p>
                <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('client')}}" aria-expanded="false">
            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
            <span class="hide-menu">AddClient</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('employee')}}" aria-expanded="false">
            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
            <span class="hide-menu">AddEmployee</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('order')}}" aria-expanded="false">
            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
            <span class="hide-menu">insertOrder</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('register')}}" aria-expanded="false">
            <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
            <span class="hide-menu">AddUser</span>
        </a>
    </li>
    </ul>
</nav>
</div>
</aside>
@endsection --}}
