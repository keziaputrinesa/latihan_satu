<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/img/images.jpg'); /* Ganti dengan URL gambar latar belakang */
            background-size: cover; /* Menyesuaikan gambar agar memenuhi layar */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container utama form login */
        .login-container {
            background-color: #b3b3b3;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        /* Logo */
        .login-logo {
            width: 100px;
            height: 100px;
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

        /* Gaya untuk form input */
        .form-control {
            border-radius: 25px;
            margin-bottom: 15px;
            padding-left: 45px;
            background-color: #e0e0e0;
            border: none;
            height: 45px;
        }

        /* Gaya ikon input */
        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 15px;
            top: 12px;
            font-size: 18px;
            color: #555;
        }

        /* Tombol login */
        .btn-login {
            background-color: #333;
            color: white;
            border-radius: 25px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Form Login -->
        <form action="/login" method="POST"> <!-- Tentukan URL endpoint login di sini -->
            <!-- Logo -->
            <div class="login-logo">
                <img src="/img/images (1).png" alt="Logo"> <!-- Ganti dengan URL/logo yang sesuai -->
            </div>

            <!-- Judul Form -->
            <h2>Login Admin</h2>

            <!-- Input Username -->
            <div class="input-icon">
                <i class="bi bi-person-fill"></i> <!-- Ikon username -->
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>

            <!-- Input Password -->
            <div class="input-icon">
                <i class="bi bi-lock-fill"></i> <!-- Ikon password -->
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <!-- Tombol Login -->
            <button type="submit" class="btn btn-login">Masuk</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
