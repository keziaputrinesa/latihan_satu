@extends ('layout_buku')

@section ('konten-utama')
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </nav>
</form>
<div id="card" class="d-flex">
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\komik1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">one piece</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\komik5.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Naruto</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\brd-44261_original-virgo-and-the-sparklings-4-melodi-menuju-angan-buku-komik-manga_full01.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Melodi</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\komik6.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mang kimetsu no yoiba</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
        
        </div>
    </div>
    
@endsection

@section('css-khusus')
    <style>
        body {
            background-color: rgb(230, 230, 230);
        }
    </style>
@endsection
