<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/asset/css/blog.css') }}">

  
  <style>
        <style type = "text/css">
  </style>
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="logo">Admin Dashboard</div>

      <a href="profile">Profile</a>
      <a href="addblog">Add Blog</a>
      <a href="#">Users</a>
      <a href="#">Reports</a>
      <a href="#">Notifications</a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <!-- Top Navigation -->
      
        <h1 class="blog_titles">Add Blogs</h1>

    </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</body>
</html>
