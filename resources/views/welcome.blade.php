<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f9;
            color: #333;
        }
        nav {
            background: #2c3e50;
            padding: 1rem;
        }
        nav h1 {
            color: #fff;
            margin: 0;
            display: inline-block;
        }
        nav ul {
            list-style: none;
            float: right;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline-block;
            margin-left: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #f39c12;
        }
        .hero {
            background: linear-gradient(135deg, #3498db, #9b59b6);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .hero a {
            background: #f39c12;
            color: black;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
        .hero a:hover {
            background: #e67e22;
        }
        .features {
            display: flex;
            justify-content: space-around;
            padding: 40px 20px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 30%;
        }
        .card h4 {
            margin-top: 0;
            color: #2c3e50;
        }
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <h1>Laravel Demo</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Hello, Laravel!</h2>
        <p>This is a simple page built with Laravel, styled with custom CSS.</p>
        <a href="#">Get Started</a>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="card">
            <h4>Fast Development</h4>
            <p>Laravel makes building web apps quick and enjoyable with elegant syntax.</p>
        </div>
        <div class="card">
            <h4>Blade Templates</h4>
            <p>Use Blade to create reusable layouts and components with ease.</p>
        </div>
        <div class="card">
            <h4>Powerful Tools</h4>
            <p>Artisan CLI, Eloquent ORM, and built-in authentication streamline your workflow.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 My Laravel Page. All rights reserved.</p>
    </footer>

</body>
</html>
