<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .top-nav{
            background-color: darkorange;
            padding: 20px 0;
        }
        .top-nav ul li{
            display: inline;
            padding: 14px 28px;
        }
        .top-nav ul li a{
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .top-nav ul li a:hover{
            opacity: 0.8;
        }
    </style>
</head>
<body>
    {{-- Navigation --}}
    <div class="top-nav">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/signup">Signup</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')
    @yield('image-section')

    {{-- Footer --}}
</body>
</html>