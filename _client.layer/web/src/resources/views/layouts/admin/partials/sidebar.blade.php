<header class="main-nav">

    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>


                    @if (isset(session('apiUser')['user']))

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title {{routeActive('admin.dashboard')}}" href="{{route('admin.dashboard')}}"><i data-feather="pie-chart"></i><span>Tableau de bord</span></a>
                    </li> --}}

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeActive('admin.shops.index')}}" href="{{route('admin.shops.index')}}"><i data-feather="shopping-cart"></i><span>Boutiques</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="#"><i data-feather="users"></i><span>Agents</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeActive('accounts.products.index')}} " href="{{route('accounts.products.index',[session('apiUser')['user']['account_id']])}}"><i data-feather="database"></i><span>Produits</span></a>
                    </li>

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title {{routeGroupActive(['admin.students.index', 'admin.students.create','admin.students.edit'])}}"
                            href="{{route('admin.students.index')}}"><i data-feather="user"></i><span>Etudiants</span></a>

                    </li> --}}

                    @endif




                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6>{{auth()->user()->getUserable()->getName() ?? 'Options'}}</h6>
                        </div>
                    </li> --}}


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
