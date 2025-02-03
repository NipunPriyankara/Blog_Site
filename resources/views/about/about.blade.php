@include('about.head')

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post">Blog</a>
                  </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about">About</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact</a>
                </li>
                @if (Route::has('login'))

                @auth
                @if (Auth::user()->usertype == 'admin')
                <!-- Content for admin -->
                <li class="nav-item">
                    <a class="nav-link" href="admin/dashboard">ADMIN PANEL</a>
            @else
                <!-- Content for regular user -->
                <li class="nav-item">
                    <a class="nav-link" href="profile">USER</a>
            @endif



                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>

                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>


              @endauth
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->


    <section class="about-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <img src="assets/images/about-us.jpg" alt="">
            <p>
                A blog site is an online platform or website where individuals or organizations publish content in the form of posts or articles. Blog sites serve various purposes, including sharing knowledge, personal experiences, opinions, updates, or promoting products and services. Here's a brief overview of what a blog site typically entails:</p>
          </div>
        </div>



        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>


      </div>
    </section>


    @include('layouts.footer')
