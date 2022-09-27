<header class="main-nav">

    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    @auth

                    <li class="sidebar-main-title">
                        <div>
                            <h6>{{auth()->user()->getUserable()->getName() ?? 'Options'}}</h6>
                        </div>
                    </li>

                    @if (auth()->user()->isAdmin())

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeActive('admin.dashboard')}}" href="{{route('admin.dashboard')}}"><i data-feather="pie-chart"></i><span>Tableau de bord</span></a>

                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeGroupActive(['admin.teachers.index', 'admin.teachers.create','admin.teachers.edit','admin.teachers.dispatchings'])}}"
                            href="{{route('admin.teachers.index')}}"><i data-feather="user"></i><span>Formateurs</span></a>

                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeGroupActive(['admin.students.index', 'admin.students.create','admin.students.edit'])}}"
                            href="{{route('admin.students.index')}}"><i data-feather="user"></i><span>Etudiants</span></a>

                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeGroupActive(['admin.courses.index', 'admin.courses.create','admin.courses.edit'])}}"
                            href="{{route('admin.courses.index')}}"><i data-feather="book"></i><span>Cours</span></a>
                    </li>

                    @endif



                    @if (auth()->user()->isTeacher())

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeActive('teacher.dashboard')}}" href="{{route('teacher.dashboard')}}"><i data-feather="pie-chart"></i><span>Tableau de bord</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{routeGroupActive(['teacher.myDispatchings', 'teacher.courseDispatchings.activities.show','teacher.courseDispatchings.activities.index'])}}"
                             href="{{route('teacher.myDispatchings')}}"><i data-feather="corner-up-right"></i><span>Mes affectations</span></a>
                    </li>

                    @endif
                    @endauth


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
