<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logos/LogoUNAB/logo_tiny.png') }}">

    <title>Admin - UnabShop</title>

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Main CSS -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />

    {{-- Amazon-style sidebar custom CSS --}}
    <style>
        /* Sidebar estilo Amazon */
        #sidenav-main {
            width: 250px;
            background-color: #232f3e !important;
            color: #fff;
        }

        #sidenav-main .navbar-brand {
            color: #f3a847 !important;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #sidenav-main .navbar-brand img {
            height: 40px;
        }

        #sidenav-main .nav-link {
            color: #ddd !important;
            border-radius: 8px;
            margin: 4px 8px;
            padding: 10px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s ease-in-out;
        }

        #sidenav-main .nav-link:hover {
            background-color: #37475a;
            color: #fff !important;
        }

        #sidenav-main .nav-link.active {
            background-color: #febd69 !important;
            color: #111 !important;
            font-weight: 600;
        }

        .sidenav-footer {
            border-top: 1px solid #37475a;
        }

        .btn-outline-warning {
            color: #febd69;
            border-color: #febd69;
        }

        .btn-outline-warning:hover {
            background-color: #febd69;
            color: #111;
        }

        .btn-warning {
            background-color: #febd69 !important;
            color: #111 !important;
            font-weight: 600;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">
    
    {{-- SIDEBAR --}}
    <aside id="sidenav-main"
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start">
        
        <div class="sidenav-header d-flex align-items-center justify-content-between px-4 py-3">
            <a href="{{ route('admin.index') }}" class="navbar-brand">
                <img src="{{ asset('assets/img/logos/LogoUNAB/unab_logo.png') }}" alt="UnabShop Logo">
                <span></span>
            </a>
            <i class="fas fa-times d-xl-none cursor-pointer text-white opacity-7" id="iconSidenav"></i>
        </div>

        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}"
                       class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="material-symbols-rounded opacity-75">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{-- Products --}}
                <li class="nav-item">
                    <a href="#"
                       class="nav-link">
                        <i class="material-symbols-rounded opacity-75">table_view</i>
                        <span>Products</span>
                    </a>
                </li>

                {{-- Categories --}}
                <li class="nav-item">
                    <a href="{{ route('admin.category.create') }}"
                       class="nav-link {{ Request::is('admin/category/create') ? 'active' : '' }}">
                        <i class="material-symbols-rounded opacity-75">receipt_long</i>
                        <span>Categories</span>
                    </a>
                </li>

                {{-- Brands --}}
                <li class="nav-item">
                    <a href="#"
                       class="nav-link">
                        <i class="material-symbols-rounded opacity-75">view_in_ar</i>
                        <span>Brands</span>
                    </a>
                </li>

            </ul>
        </div>

        {{-- Footer --}}
        <div class="sidenav-footer mt-auto px-4 pt-3">
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard"
               class="btn btn-outline-warning w-100 mb-2" target="_blank">
                Documentation
            </a>
            <a href="{{ route('admin.index') }}" class="btn btn-warning w-100">
                Contact
            </a>
        </div>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        
        {{-- NAVBAR --}}
        @include('layots.navbar')

        <div class="container-fluid py-2">
            {{-- MAIN CONTENT --}}

            
            @yield('content')
            

            {{-- FOOTER --}}
            @include('layots.footer')
        </div>
    </main>

    <!-- Core JS Files -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
</body>

</html>
