<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App | Login</title>
    <style>
        .login-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
        }
    
        .login-form form {
            width: 300px;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        .login-form input[type="text"],
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
        }
    
        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    
        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            background-color: red;
            color: white;
            padding: 14px;
            border-radius: 10px;
             max-width: 400px;
             margin-top: 5px;
             margin-bottom: 0;
             margin-right: auto;
             margin-left: auto;
        }
        .success-message {
            background-color: green;
            color: white;
            padding: 14px;
            border-radius: 10px;
             max-width: 400px;
             margin-top: 5px;
             margin-bottom: 0;
             margin-right: auto;
             margin-left: auto;
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('errors')
            @if (Session::has('failed'))
                <div class="error-message">
                    {{Session::get('failed')}}
                </div>
            @endif
    @endsection

    @section('success')
            @if (Session::has('success'))
                <div class="success-message">
                    {{Session::get('success')}}
                </div>
            @endif
    @endsection

    @section('content')
    <div class="login-form">
        <div>
        <h2>Login Here</h2> <!-- Added heading -->
        <form action="/login" method="POST">
            @csrf
            <div>
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div>
                <input type="submit" name="login" value="Login">
            </div>
        </form>
        <p>Don't have an account? <a href="/signup">Signup</a></p>
        </div>
    </div>
    @endsection
</body>
</html>