<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav slimscrollsidebar">
		<div class="sidebar-head">
			<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> 
		</div>
		<div class="user-profile">
			<div class="dropdown user-pro-body">
				<div>
          <img src="{{ asset('plugins/images/users/noname.jpg')}}" alt="user-img" class="img-circle">
        </div>
				<a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ ucwords(Auth::user()->name)}}  </a>
      </div>
    </div>
    <ul class="nav" id="side-menu">
      <li> <a href="{{ url('admin/')}}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu">Dashboard</span></a>
      </li>
      <li> <a href="#" class="waves-effect"><i class="mdi mdi-clipboard-account fa-fw"></i> <span class="hide-menu">Data PKM</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="{{ url('admin/period') }}"><i class="fa fa-caret-right"></i> <span class="hide-menu"> Periode PKM</span></a></li>
          <li><a href="#"><i class="fa fa-caret-right"></i> <span class="hide-menu"> Usulan PKM</span></a></li>
        </ul>
      </li>
      <li> <a href="#" class=""><i class="mdi mdi-clipboard-account fa-fw"></i> <span class="hide-menu">Data Users</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li><a href="#"><i class="fa fa-caret-right"></i> <span class="hide-menu"> Mahasiswa</span></a></li>
          <li><a href="#"><i class="fa fa-caret-right"></i> <span class="hide-menu"> Dosen</span></a></li>
          <li><a href="{{ url('admin/users')}}"><i class="fa fa-caret-right"></i> <span class="hide-menu"> Admin</span></a></li>
        </ul>
      </li>
      <li class="devider"></li>
      <li><a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">{{ __('Logout') }}
      </span></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </li>
    </ul>
  </div>
</div>