<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
<style>
    .signup-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    .signup-form form {
        width: 300px;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .signup-form input[type="text"],
    .signup-form input[type="email"],
    .signup-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 3px;
    }

    .signup-form input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    .signup-form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="signup-form">
        <div>
        <h2>Signup Here</h2> <!-- Added heading -->
        <form action="/process_signup" method="POST">
            @csrf
            <div>
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div>
                <input type="submit" name="signup" value="Signup">
            </div>
        </form>
        <p>Already have an account? <a href="/login">Login</a></p> <!-- Added login link -->
        </div>
    </div>
    @endsection
</body>
</html>