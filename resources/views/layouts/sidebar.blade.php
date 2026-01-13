<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="https://upload.wikimedia.org/wikipedia/sco/b/bf/KFC_logo.svg" alt="KFC Logo" style="width: 40px; filter: brightness(0) invert(1);">
        </div>
        <div class="sidebar-brand-text mx-3">Inventory KFC</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Manajemen Stok
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('produk.index') }}">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Daftar Stok</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('stok-opname.index') }}">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span>Stok Opname</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('laporan.index') }}">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Laporan Stok</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>