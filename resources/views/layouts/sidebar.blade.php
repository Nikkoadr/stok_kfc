        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="https://upload.wikimedia.org/wikipedia/sco/b/bf/KFC_logo.svg" alt="KFC Logo" style="width: 40px;">
                </div>
                <div class="sidebar-brand-text mx-3">Stok KFC </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('daftar_barang') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Daftar Stok</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('hitung.create') }}">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Hitung SO</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('laporan') }}">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Laporan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>