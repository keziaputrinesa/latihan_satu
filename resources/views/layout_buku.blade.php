<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    @yield('css-khusus')
</head>

<body>
    <nav class="navbar" style="background-color: #555097">
        <div class="container-fluid">
            <img src="/img/images (1).png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <a class="navbar-brand fw-bold text-white">PERPUSTAKAAN</a>
            <svg class="bi me-2" width="800" height="20">
                <use xlink:href="" />
            </svg>
            <a class="navbar-brand" href="#">
                <strong class="navbar-brand fw-bold text-white">Sistem Informasi Perpustakaan</strong>
            </a>
        </div>
    </nav>
    <div id="main" class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-dark bg-light" style="width: 280px; height: calc(100vh - 58px);">
            <div class="dropdown container text-align-center">
                <svg class="bi me-2" width="16" height="16"></svg>
                <strong class="fs-4">Daftar Buku</strong>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="dropdown-item-text mt-3">
                    <a href="/fiksi" class="nav-link active text-dark" style="background-color: #555097" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"></svg>Fiksi
                    </a>
                </li>
                <li class="dropdown-item-text mt-3">
                    <a href="non-fiksi" class="nav-link active text-dark" style="background-color: #a8f0ec" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"></svg> Non-Fiksi
                    </a>
                </li>
                <li class="dropdown-item-text mt-3">
                    <a href="sejarah" class="nav-link active text-dark" style="background-color: #555097" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"></svg>Sejarah
                    </a>
                </li>
                <li class="dropdown-item-text mt-3">
                    <a href="komik" class="nav-link active text-dark" style="background-color: #a8f0ec" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"></svg>komik
                    </a>
                </li>
            </ul>
            <hr>
        </div>
        <div id="isi-konten" class="container-fluid p-4" style="width: calc(100% - 280px);">
            @yield('konten-utama')
        </div>
    </div>
    
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>







