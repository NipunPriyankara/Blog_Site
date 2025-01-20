@include('profile.css')

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome Back, {{ Auth::user()->name }}!</h1>
        <p>We're glad to have you here. What would you like to do today?</p>



        <div class="actions">
            
            <a href="/newblog">New Blog</a>
            <a href="/myblog">My Blog</a>
            
        </div>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} MyApp. All rights reserved.
    </footer>

