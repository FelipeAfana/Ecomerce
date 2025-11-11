<aside id="sidenav-main"
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 shadow-sm fixed-start bg-dark text-white py-3">

    {{-- HEADER --}}
    <div class="sidenav-header d-flex align-items-center justify-content-between px-4 mb-3">
        <a href="{{ route('admin.index') }}" class="navbar-brand d-flex align-items-center gap-2">
            <img src="{{ asset('assets/img/logos/LogoUNAB/unab_logo.png') }}"
                 alt="Ecommerce UNAB"
                 class="img-fluid"
                 style="max-height: 40px;">
            <span class="fw-bold fs-5 text-warning">UnabShop</span>
        </a>
        <i class="fas fa-times d-xl-none cursor-pointer text-white opacity-7" id="iconSidenav"></i>
    </div>

    {{-- NAVIGATION --}}
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            {{-- Dashboard --}}
            <li class="nav-item mb-1">
                <a href="{{ route('admin.category.store') }}"
                   class="nav-link d-flex align-items-center px-4 py-2 rounded {{ Request::is('admin') ? 'bg-warning text-dark fw-semibold' : 'text-light' }}">
                    <i class="material-symbols-rounded me-2 opacity-75">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Products --}}
            <li class="nav-item mb-1">
                <a href="{{route('admin.product.create')}}"
                   class="nav-link d-flex align-items-center px-4 py-2 rounded text-light hover-gold">
                    <i class="material-symbols-rounded me-2 opacity-75">table_view</i>
                    <span>Products</span>
                </a>
            </li>

            {{-- Categories --}}
            <li class="nav-item mb-1">
                <a href="{{ route('admin.category.create') }}"
                   class="nav-link d-flex align-items-center px-4 py-2 rounded {{ Request::is('admin/category/create') ? 'bg-warning text-dark fw-semibold' : 'text-light hover-gold' }}">
                    <i class="material-symbols-rounded me-2 opacity-75">receipt_long</i>
                    <span>Categories</span>
                </a>
            </li>

            {{-- Brands --}}
            <li class="nav-item mb-1">
                <a href="#"
                   class="nav-link d-flex align-items-center px-4 py-2 rounded text-light hover-gold">
                    <i class="material-symbols-rounded me-2 opacity-75">view_in_ar</i>
                    <span>Brands</span>
                </a>
            </li>

        </ul>
    </div>

    {{-- FOOTER --}}
    <div class="sidenav-footer mt-auto px-4 pt-3 border-top border-secondary">
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard"
           class="btn btn-outline-warning w-100 mb-2" target="_blank">
            Documentation
        </a>
        <a href="{{ route('admin.index') }}" class="btn btn-warning w-100 text-dark fw-semibold">
            Contact
        </a>
    </div>

</aside>

{{-- CUSTOM AMAZON-LIKE STYLE --}}
<style>
    .hover-gold:hover {
        background-color: #ffbb00 !important;
        color: #111 !important;
        font-weight: 600;
        transition: all 0.2s ease-in-out;
    }
    #sidenav-main {
        width: 250px;
    }
    .nav-link {
        transition: all 0.2s ease-in-out;
    }
    .sidenav-header .navbar-brand span {
        letter-spacing: 0.5px;
    }
</style>
