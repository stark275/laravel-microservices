<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="#"><img class="img-fluid" src="{{asset('assets/comp.png')}}" alt=""></a></div>
      <div class="dark-logo-wrapper"><a href="#"><img class="img-fluid" src="{{asset('assets/comp.png')}}" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
    </div>
    <div class="left-menu-header col">
      <ul>
        <li>
          <form class="form-inline search-form">
            <div class="search-bg"><i class="fa fa-search"></i>
              <input class="form-control-plaintext" placeholder="Rechercher.....">
            </div>
          </form>
          <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
        </li>
      </ul>
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>

        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
          <ul class="notification-dropdown onhover-show-div">
            <li>
              <p class="f-w-700 mb-0">Vous avez 2 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
            </li>

            <li class="noti-secondary">
              <div class="media">
                <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                <div class="media-body">
                  <p>6 Cours terminés</p>
                  <span>Il y a 2 min</span>
                </div>
              </div>
            </li>
            <li class="noti-success">
              <div class="media">
                <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                <div class="media-body">
                  <p>Rapport mensuel</p>
                  <span>Il y a 2 min</span>
                </div>
              </div>
            </li>

          </ul>
        </li>
        <li>
            <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>

        <li class="onhover-dropdown p-0">
          <a href="{{route('login')}}" class="btn btn-primary-light" ><i data-feather="log-out"></i>Déconnexion</a>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>
