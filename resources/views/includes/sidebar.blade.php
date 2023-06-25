<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ url('backend/src/assets/images/logos/dark-logo.png') }}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('dashboard')) active @endif" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Main Menu</span>
                </li>
                @if (Auth::user()->role == 'Admin')
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('data-orang-tua.*')) active @endif" href="{{ route('data-orang-tua.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-friends"></i>
                        </span>
                        <span class="hide-menu">Data Orang Tua</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('data-siswa.*')) active @endif" href="{{ route('data-siswa.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-school"></i>
                        </span>
                        <span class="hide-menu">Data Siswa</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('admin-perkembangan.index')) active @endif" href="{{ route('admin-perkembangan.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-chart-area-line"></i>
                        </span>
                        <span class="hide-menu">Perkembangan Siswa</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('laporan.')) active @endif" href="{{ route('laporan.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-text"></i>
                        </span>
                        <span class="hide-menu">Laporan</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Prestasi</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('prestasi-akademik.*')) active @endif" href="{{ route('prestasi-akademik.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Prestasi Akademik</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('prestasi-non-akademik.*')) active @endif" href="{{ route('prestasi-non-akademik.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-artboard"></i>
                        </span>
                        <span class="hide-menu">Prestasi Non Akademik</span>
                    </a>
                </li>
                @elseif (Auth::user()->role == 'Orang Tua')
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('profile.*')) active @endif" href="{{ route('profile.edit') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('perkembangan.index')) active @endif" href="{{ route('perkembangan.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-chart-area-line"></i>
                        </span>
                        <span class="hide-menu">Perkembangan Siswa</span>
                    </a>
                </li>
                @if (App\Helper\Helper::checkSiswa())
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('rekapan.*')) active @endif" href="{{ route('rekapan.show', App\Helper\Helper::getSiswa()) }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-printer"></i>
                        </span>
                        <span class="hide-menu">Rekapan</span>
                    </a>
                </li>
                @endif
                @elseif (Auth::user()->role == 'Siswa')
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('profile.*')) active @endif" href="{{ route('profile.edit') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('data-nilai-rapor.*')) active @endif" href="{{ route('data-nilai-rapor.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-chart-area-line"></i>
                        </span>
                        <span class="hide-menu">Nilai Rapor</span>
                    </a>
                </li>
                @endif
                @if (Auth::user()->role == 'Admin')
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Admin</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('profile.*')) active @endif" href="{{ route('profile.edit') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link @if(Route::is('data-admin.*')) active @endif" href="{{ route('data-admin.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-check"></i>
                        </span>
                        <span class="hide-menu">Data Admin</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
