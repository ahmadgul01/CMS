<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  @stack('bb')
    <style>
        /* Reset some default styles */
body, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

/* Navbar styles */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
}

.logo {
    color: white;
    font-size: 24px;
    font-weight: bold;
}

.nav-links {
    display: flex;
    gap: 20px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: lightgray;
}
</style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">BILLU BB</div>
        <ul class="nav-links">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('Contact')}}">Contact</a></li>
           
        </ul>
    </nav>
</body>
</html>
