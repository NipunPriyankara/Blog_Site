<div class="logo"><a href="/" class="simple-text logo-normal">
    Go to Blog
  </a></div>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/dashboard')}}">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{url('admin/profile')}}">
        <i class="material-icons">person</i>
        <p>User Profile</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{url('admin/allpost')}}">
        <i class="material-icons">content_paste</i>
        <p>All Post</p>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{url('admin/newpost')}}">
        <i class="material-icons">adding</i>
        <p>Add New Post</p>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="material-icons">logout</i>
        <p>Logout</p>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</div>
</div>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:void(0)">Typography</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-default btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
              <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
              <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
              <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
              <a class="dropdown-item" href="javascript:void(0)">Another One</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
