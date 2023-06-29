<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: blue;
        }
        .wrapper{
            background-color: #f4f4f4;
        }
        .search{
            width: 50%;
            margin: 0 auto;
        }
        .container {
            display: flex;
            height: 100vh;
        }
    
        .sidebar {
            width: 200px;
        }
    
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
    
        nav ul li {
            margin-bottom: 10px;
        }
    
        nav ul li a {
            display: block;
            padding: 5px;
            color: #ff8c00;
            text-decoration: none;
        }
    
        nav ul li a:hover {
            background-color: #ddd;
        }
    
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
    
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="search">
            <form action="">
                <input type="text" placeholder="Search">
            </form>
        </div>
        <div class="container">
            <div class="sidebar">
                <nav>
                    <ul>
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li><a href="{{route('dashboard.profile')}}">Profile</a></li>
                        <li><a href="">View accounts</a></li>
                        <li><a href="">View transactions</a></li>
                        <li><a href="">Transfer funds</a></li>
                        <li><a href="{{route('dashboard.loan')}}">Loan</a></li>
                        <li><a href="">Pay bills</a></li>
                        <li><a href="">View statements</a></li>
                        <li><a href="">Manage cards</a></li>
                        <li><a href="">Manage Alerts</a></li>
                        <li><a href="">Messaging</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-content">
                @yield('message')
                @yield('dashboard-content')
            </div>
        </div>
    </div>
</body>
</html>