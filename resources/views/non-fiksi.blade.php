@extends('layout_buku')

@section('konten-utama')
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
        <img src="\img\non fiksi 1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pisikologi</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
    </div>
</div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\non fiksi2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Untuk NegriKu</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\nonFiksiiiiii.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Matematika</h5>
        <a href="#" class="btn btn-primary">Pilih Buku</a>
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\non fiksi4.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Jika kita tak pernah jadi apa - apa </h5>
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



