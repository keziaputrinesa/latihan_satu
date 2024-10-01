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
        <img src="\img\fiksi1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\non fiksi 1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\sejarah.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
    </div>
    <div class="card" style="width: 14rem; margin-right: 20px;">
        <img src="\img\komik1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
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
