    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Gestion des Communes <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <li class="{{ Route::is('communes.index') ? 'active' : '' }} nav-item">
            <a class="nav-link" href="{{ route('communes.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCommune" aria-expanded="true"
                aria-controls="collapseCommune">
                <i class="fas fa-fw fa-cog"></i>
                <span>Communes</span>
            </a>
            <div id="collapseCommune" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Gestion des communes</h6>
                    <a class="collapse-item {{ Route::is('communes.index') ? 'active' : '' }}" href="{{ route('communes.index') }}">Liste des communes</a>
                    <a class="collapse-item {{ Route::is('communes.create') ? 'active' : '' }}" href="{{ route('communes.create') }}"  data-bs-toggle="modal" data-bs-target="#create_commune">Creer une commune</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDep" aria-expanded="true"
                aria-controls="collapseDep">
                <i class="fas fa-fw fa-cog"></i>
                <span>Departements</span>
            </a>
            <div id="collapseDep" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Gestion des departements</h6>
                    <a class="collapse-item" href="#">Liste des departement</a>
                    <a class="collapse-item" href="#">Creer un departement</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Divider -->

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        {{-- <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="{{ asset('asset_template/img/undraw_rocket.svg') }}" alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div> --}}

    </ul>
