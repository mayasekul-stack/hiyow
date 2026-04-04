<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <img src="{{ asset('template/img/logo-cikole.png') }}" alt="Logo" style="max-height:36px; width:auto;">
            </a> 
            
    
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : ''}}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PELAYANAN
            </div>

                                
            <!-- Nav Item - Tables -->
            <li class="nav-item {{ request()->is('resident*') ? 'active' : ''}}">
                <a class="nav-link" href="/resident">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Tamu</span></a>
            </li>
            <li class="nav-item {{ request()->is('jam*') ? 'active' : ''}}">
                    <a class="nav-link" href="/jam">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Jam Pelayanan</span></a>
            </li>

            <li class="nav-item {{ request()->is('agenda*') ? 'active' : ''}}">
                    <a class="nav-link" href="/agenda">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Agenda Kegiatan</span></a>
            </li>

            <li class="nav-item {{ request()->is('pengaduan*') ? 'active' : ''}}">
                    <a class="nav-link" href="/pengaduan">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pengaduan Masyarakat</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>