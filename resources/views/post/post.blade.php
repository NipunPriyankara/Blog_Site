<style>
.col-lg-10 {
    flex: 0 0 100%;
    max-width: 100%;
}

.blog-posts .row {
    justify-content: center; /* Centers the posts */
}

.blog-thumb {
    height: 400px; /* Increase image height */
}

.blog-post {
    margin-bottom: 30px; /* Adds better spacing */
}


.blog-posts .row {
    display: flex;
    justify-content: center; /* Centers posts horizontally */
    flex-wrap: wrap; /* Ensures responsiveness */
}

.blog-post {
    text-align: center; /* Centers text inside posts */
    margin-bottom: 30px;
}


.blog-thumb {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Ensures it takes full width of the column */
    height: 300px; /* Adjust this height as needed */
    overflow: hidden; /* Prevents image overflow */
    border-radius: 8px;
}

.blog-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures images scale properly without distortion */
    border-radius: 8px;
}

.col-lg-8 {
    flex: 0 0 100%;
    max-width: 100%;
}
.all-blog-posts {
    padding: 10px 0; /* Reduce padding */
}

.blog-post {
    margin-bottom: 15px; /* Reduce margin */
}
.blog-posts {
    background-color: #f8f9fa; /* Light gray instead of white */
}
.blog-thumb {
    height: 350px; /* Increase image height */
}



</style>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog Posts</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

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
              <li class="nav-item ">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="post">Blog</a>
              </li>
              <li class="nav-item">
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
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="all-blog-posts">
              <div class="row">
                @foreach ($post as $post)
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="postimage/{{$post->image}}" alt="" style="width: 100%; border-radius: 8px;">
                    </div>
                    <div class="down-content">
                      <span></span>
                      <a href="post-details.html"><h4>{{$post->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{$post->name}}</a></li>
                        <li><a href="#">May 31, 2020</a></li>
                        <li><a href="comment">12 Comments</a></li>
                      </ul>
                      <p>{!!$post->description!!}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
 </div>
</div>
@include('layouts.footer')

