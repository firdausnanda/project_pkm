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
      <li> <a href="{{ route('admin.index')}}" class="waves-effect"><i class="mdi mdi-av-timer fa-fw"></i> <span class="hide-menu">Dashboard</span></a>
      </li>
      <li> <a href="#" class="waves-effect"><i class="mdi mdi-clipboard-account fa-fw"></i> <span class="hide-menu">Report</span></a>
      </li>
      <li> <a href="{{ route('admin.users.index')}}" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Akun</span></a>
      </li>
      <li class="devider"></li>
      <li><a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">{{ __('Logout') }}
      </span></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </li>
        <!-- <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
        <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
        <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li> -->
    </ul>
  </div>
</div>