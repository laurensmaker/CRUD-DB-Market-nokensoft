
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dasbor">
            <div class="sidebar-brand-icon rotate-n-15 ">
                <i class="fa fa-database" aria-hidden="true"></i>
            </div>
            <!-- <div class="sidebar-brand-text mx-3">Nokensoft<sup>2</sup></div> -->
            <div class="sidebar-brand-text mx-3">Nokensoft</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ ($title === "dasbor") ? 'active' : ''}} ">
            <a class="nav-link " href="dasbor">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Charts -->
        <li class="nav-item {{ ($title === "organisasi") ? 'active' : ''}}">
            <a class="nav-link" href="organisasi">
                <i class="fas fa-fw fa-server"></i>
                <span>Organisani</span></a>
        </li>

        <li class="nav-item {{ ($title === "kategori") ? 'active' : ''}}">
            <a class="nav-link" href="kategori">
                <i class="fas fa-fw fa-th fa-th"></i>
                <span>Kategori</span></a>
        </li>

        <li class="nav-item {{ ($title === "pengguna") ? 'active' : ''}}">
            <a class="nav-link" href="pengguna">
                <i class="fas fa-fw fa-users"></i>
                <span>Pengguna</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ 'dasbor' }}" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Data Master</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <!-- <h6 class="collapse-header">Login Screens:</h6> -->
                    <a class="collapse-item {{ ($title === "provinsi") ? 'active' : ''}}" href="provinsi">Provinsi</a>
                    <a class="collapse-item {{ ($title === "kabupaten") ? 'active' : ''}}" href="kabupaten">Kabupaten</a>
                    <a class="collapse-item {{ ($title === "distrik") ? 'active' : ''}}" href="distrik">Distrik</a>
                    <a class="collapse-item {{ ($title === "kelurahan") ? 'active' : ''}}" href="kelurahan">Kelurahan</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

      

