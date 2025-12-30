<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Roles & Permissions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            background-color: #fff;
            width: 100%;
            max-width: 400px;
        }
        .login-card h2 {
            margin-bottom: 30px;
            font-weight: bold;
            text-align: center;
        }
        .login-card .form-control {
            height: 45px;
            margin-bottom: 20px;
        }
        .login-card button {
            height: 45px;
        }
        .login-card .text-center a {
            text-decoration: none;
        }
    </style>
    @livewireStyles
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <h2>Login</h2>
     @livewire('admin.auth.login-component')
        <div class="text-center mt-3">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="text-center mt-2">
            <span>Don't have an account? <a href="#">Register</a></span>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
