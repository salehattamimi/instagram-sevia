
<header id="header" class="  header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0"> 
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img width="153" data-sticky-width="153" src="{{ asset('img/logo.png') }}"> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-modern header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link" href="{{ url('/#page-pendaftaran') }}">
                                                Pendaftaran
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('/#page-persyaratan') }}">
                                                Persyaratan & Alur
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Route::is('rusun.index') ? 'active' : '' }}" href="{{ url('/rusuns') }}">
                                                Profil Rusun
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Request::is('cek-permohonan') ? 'active' : '' }}" href="{{ route('cek_permohonan') }}">
                                                Cek Permohonan
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a class="nav-link" href="{{ asset('panduanv11.pdf') }}" target="_blank">
                                                Panduan
                                            </a>
                                        </li> --}}
                                        <li>
                                            <a class="nav-link" href="http://etakok.dprkpcktr.surabaya.go.id/" target="_blank">
                                                Konsultasi
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ url('login') }}">
                                                <i class="fas fa-user me-2"></i>
                                                Login
                                            </a>
                                        </li>  
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>