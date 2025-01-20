
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: 'Poppins', sans-serif;
background: linear-gradient(to bottom right, #4caf50, #8bc34a);
color: #fff;
min-height: 100vh;
display: flex;
flex-direction: column;
}

nav {
background: rgba(0, 0, 0, 0.7);
padding: 1rem 2rem;
display: flex;
justify-content: space-between;
align-items: center;
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

nav .logo {
font-size: 1.5rem;
font-weight: 600;
color: #fff;
}

nav ul {
display: flex;
list-style: none;
}

nav ul li {
margin-left: 1.5rem;
}

nav ul li a {
color: #fff;
text-decoration: none;
font-size: 1rem;
transition: color 0.3s;
}

nav ul li a:hover {
color: #8bc34a;
}

.container {
padding: 2rem;
flex-grow: 1;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}

.container h1 {
font-size: 2.5rem;
margin-bottom: 1rem;
}

.container p {
font-size: 1.2rem;
margin-bottom: 2rem;
}

.actions {
display: flex;
gap: 1rem;
}

.actions a {
padding: 0.8rem 2rem;
font-size: 1rem;
color: #4caf50;
background: #fff;
text-decoration: none;
border-radius: 5px;
font-weight: bold;
transition: background 0.3s, color 0.3s;
}

.actions a:hover {
background: #4caf50;
color: #fff;
}

footer {
background: rgba(0, 0, 0, 0.7);
text-align: center;
padding: 1rem;
color: #fff;
font-size: 0.9rem;
}


    
</style>
</head>
<body>
<!-- Navigation Bar -->
<nav>
    <div class="logo">MyApp</div>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
    </ul>
</nav>
