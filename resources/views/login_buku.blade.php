<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna - Sistem Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <nav class="navbar" style="background-color: #555097">
        <div class="container-fluid">
            <img src="/img/images (1).png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand fw-bold text-white">PERPUSTAKAAN</a>
            <a class="navbar-brand" href="#">
                <strong class="navbar-brand fw-bold text-white">Sistem Informasi Perpustakaan</strong>
            </a>
        </div>
    </nav>
    <style>
        body {
            background-image: url('background-library.jpg'); /* Ganti dengan URL background sesuai */
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        /* Logo */
        .login-logo {
            width: 80px;
            height: 80px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }

        .login-logo img {
            width: 60px;
            height: 60px;
        }

        /* Form Login */
        .form-control {
            border-radius: 20px;
            background-color: #f0e5e5;
            border: 1px solid #9c6d6d;
            margin-bottom: 15px;
            padding-left: 20px;
        }

        /* Tombol Login */
        .btn-login {
            background-color: #9c6d6d;
            color: white;
            border-radius: 20px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        /* Navbar styling */
        .navbar {
            background-color: #555097;
        }

        .navbar-brand {
            color: white;
        }

        .navbar img {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    

    <!-- Form Login -->
    <div class="login-container">
        <!-- Logo -->
        <div class="login-logo">
            <img src="logo-placeholder.png" alt="Logo"> <!-- Ganti dengan URL logo sesuai -->
        </div>

        <!-- Judul Form -->
        <h3>LOGIN Pengguna</h3>

        <!-- Input Username -->
        <input type="text" class="form-control" placeholder="UserName">

        <!-- Input Password -->
        <input type="password" class="form-control" placeholder="Password">

        <!-- Tombol Login -->
        <button class="btn btn-login">Login</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
