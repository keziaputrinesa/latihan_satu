@extends('layout-Utama')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="profile-pic.jpg" alt="Profile Picture">
                <h3>Kezia putri N</h3>
                <p class="role">Administrator</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Kelola Data</a></li>
                    <li><a href="#">Sirkulasi</a></li>
                    <li><a href="#">Log Data</a></li>
                    <li><a href="#">Laporan</a></li>
                </ul>
            </nav>
            <div class="settings">
                <ul>
                    <li><a href="#">Pengguna Sistem</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </aside>

        <main class="main-content">
            <header>
                <h1>DASHBOARD ADMINISTRATOR</h1>
                <button class="print-button">PRINT FREE</button>
            </header>

            <section class="card">
                <h2>KARTU ANGGOTA PERPUSTAKAAN</h2>
                <table>
                    <tr>
                        <td>ID ANGGOTA</td>
                        <td>A0001</td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td>PUTRI</td>
                    </tr>
                    <tr>
                        <td>JENIS KELAMIN</td>
                        <td>PEREMPUAN</td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>NO HP</td>
                        <td>081234567</td>
                    </tr>
                </table>
                <div class="photo-box">3x4</div>
            </section>
        </main>
    </div>
</body>
</html>

@endsection